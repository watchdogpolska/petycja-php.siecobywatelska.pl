<?php
namespace App\Model\Behavior;

use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\Network\Http\Client;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\ORM\Table;

/**
 * GeocoderBehavior behavior
 */
class GeocodeBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'field' => 'address',
        'geo_lat' => 'geo_lat',
        'geo_lng' => 'geo_lng',
        'implementedFinders' => [
            'geocoded' => 'findGeocoded',
        ]
    ];

    /**
     * Asking for information and returns only cordinations.
     *
     * @param string $address Address
     * @return array
     */
    protected function requestApiForLocation($address)
    {
        $http = new Client();
        $response = $http->get(
            'https://maps.googleapis.com/maps/api/geocode/json',
            [
                'address' => $address,
                'key' => 'AIzaSyDBgRjePHflnt1s1Ua9XyeApOemyPkb1zE'
            ]
        )->json;

        return $response['results'][0]['geometry']['location'];
    }

    /**
     * Do a check and set a appropiate field
     *
     * @param \Cake\Datasource\EntityInterface $entity Entity
     * @return void
     */
    public function geocode(EntityInterface $entity)
    {
        $config = $this->config();

        $value = $entity->get($config['field']);

        if (!empty($value)) {
            $location = $this->requestApiForLocation($value);

            $entity->set($config['geo_lat'], $location['lat']);
            $entity->set($config['geo_lng'], $location['lng']);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @param \Cake\Event\Event $event {@inheritdoc}
     * @param \Cake\Datasource\EntityInterface $entity Entity
     * @return void
     */
    public function beforeSave(Event $event, EntityInterface $entity)
    {
        $this->geocode($entity);
    }

    /**
     * Finder that allow display only entries with geolocation.
     *
     * @param \Cake\ORM\Query $query Query that will be filtered.
     * @param array $options Options.
     * @return \Cake\ORM\Query
     */
    public function findGeocoded(Query $query, array $options)
    {
        $config = $this->config();

        return $query->where([
            $config['geo_lat'] . ' IS NOT' => null,
            $config['geo_lng'] . ' IS NOT' => null,
        ]);
    }
}
