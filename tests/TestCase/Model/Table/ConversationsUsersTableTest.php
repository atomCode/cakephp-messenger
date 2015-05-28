<?php
namespace Messenger\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Messenger\Model\Table\ConversationsUsersTable;

/**
 * Messenger\Model\Table\ConversationsUsersTable Test Case
 */
class ConversationsUsersTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.messenger.conversations_users',
        'plugin.messenger.conversations',
        'plugin.messenger.users',
        'plugin.messenger.messages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ConversationsUsers') ? [] : ['className' => 'Messenger\Model\Table\ConversationsUsersTable'];
        $this->ConversationsUsers = TableRegistry::get('ConversationsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConversationsUsers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
