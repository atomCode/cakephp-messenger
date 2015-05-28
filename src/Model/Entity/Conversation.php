<?php
namespace Messenger\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conversation Entity.
 */
class Conversation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'title' => true,
        'users' => true,
        'messages' => true,
    ];
}
