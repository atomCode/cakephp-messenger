<?php
namespace Messenger\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity.
 */
class Message extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'conversation_id' => true,
        'content' => true,
        'user' => true,
        'conversation' => true,
    ];
}
