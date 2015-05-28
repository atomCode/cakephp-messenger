<?php
namespace Messenger\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Messenger\Model\Entity\ConversationsUser;

/**
 * ConversationsUsers Model
 */
class ConversationsUsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('conversations_users');
        $this->displayField('conversation_id');
        $this->primaryKey(['conversation_id', 'user_id']);
        $this->addBehavior('Timestamp');
        $this->belongsTo('Conversations', [
            'foreignKey' => 'conversation_id',
            'joinType' => 'INNER',
            'className' => 'Messenger.Conversations'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'Messenger.Users'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('is_read', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_read', 'create')
            ->notEmpty('is_read');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['conversation_id'], 'Conversations'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
