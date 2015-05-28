<?php
namespace Messenger\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConversationsUser Entity.
 */
class ConversationsUser extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'is_read' => true,
        'conversation' => true,
        'user' => true,
    ];
}
