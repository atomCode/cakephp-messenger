<?php
namespace Messenger\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Messenger\Model\Table\ConversationsTable;

/**
 * Messenger\Model\Table\ConversationsTable Test Case
 */
class ConversationsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.messenger.conversations',
        'plugin.messenger.users',
        'plugin.messenger.conversations_users',
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
        $config = TableRegistry::exists('Conversations') ? [] : ['className' => 'Messenger\Model\Table\ConversationsTable'];
        $this->Conversations = TableRegistry::get('Conversations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Conversations);

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
