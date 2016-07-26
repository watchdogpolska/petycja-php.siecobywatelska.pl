<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $user_id
 * @property string $state
 * @property string $type
 * @property string $link_target
 *
 * @property \App\Model\Entity\User $user
 */
class Post extends Entity
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
     * Allow check that the post was modified ever.
     *
     * @return bool
     */
    public function isHasBennModifited()
    {
        // Lte = Less or equal
        return $this->created->modify('+15 minutes')->lte($this->modified);
    }

    /**
     * Transform a state to translated form
     *
     * @return string
     */
    public function stateToString()
    {
        switch ($this->state) {
            case 'published':
                return __('Published');
            case 'draft':
                return __('Draft');
            case 'pinned':
                return __('Pinned');
            default:
                return 'Unknown state: ' . $this->state;
        }
    }
}
