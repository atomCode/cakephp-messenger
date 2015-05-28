<?php
namespace Messenger\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConversationsUsersFixture
 *
 */
class ConversationsUsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'conversation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'is_read' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['conversation_id', 'user_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_bin'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'conversation_id' => 1,
            'user_id' => 1,
            'is_read' => 1,
            'created' => '2015-05-28 15:11:41',
            'modified' => '2015-05-28 15:11:41'
        ],
    ];
}
