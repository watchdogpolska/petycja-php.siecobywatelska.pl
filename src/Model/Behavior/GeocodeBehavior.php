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

    private function requestApiForLocation($address){
        $http = new Client();
        $response = $http->get('https://maps.googleapis.com/maps/api/geocode/json',
            [
                'address' => $address,
                'key' => 'AIzaSyDBgRjePHflnt1s1Ua9XyeApOemyPkb1zE'
            ])->json;

        return $response['results'][0]['geometry']['location'];
    }

    public function geocode(Entity $entity)
    {
        $config = $this->config();

        $value = $entity->get($config['field']);

        if(!empty($value)){
            $location = $this->requestApiForLocation($value);

            $entity->set($config['geo_lat'], $location['lat']);
            $entity->set($config['geo_lng'], $location['lng']);
        }
    }

    public function beforeSave(Event $event, EntityInterface $entity)
    {
        $this->geocode($entity);
    }

    public function findGeocoded(Query $query, array $options)
    {
        $config = $this->config();

        return $query->where([
            $config['geo_lat'] . ' IS NOT' => null,
            $config['geo_lng'] . ' IS NOT' => null,
        ]);
    }
}
