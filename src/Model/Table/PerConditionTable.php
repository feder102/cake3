<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerCondition Model
 *
 * @method \App\Model\Entity\PerCondition get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerCondition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerCondition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerCondition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerCondition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerCondition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerCondition findOrCreate($search, callable $callback = null, $options = [])
 */
class PerConditionTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('per_condition');
        $this->setDisplayField('id_condition');
        $this->setPrimaryKey('id_condition');
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
            ->integer('id_condition')
            ->allowEmpty('id_condition', 'create');

        $validator
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
    }
}
