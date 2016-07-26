<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Signature Entity
 *
 * @property int $id
 * @property string $comment
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property bool $newsletter
 * @property \Cake\I18n\Time $created
 */
class Signature extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Return full name (concated first nad last name)
     *
     * @return string
     */
    protected function _getName()
    {
        return $this->_properties['first_name'] . '  ' .
            $this->_properties['last_name'];
    }
}
