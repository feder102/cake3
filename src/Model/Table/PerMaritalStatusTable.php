<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerMaritalStatus Model
 *
 * @method \App\Model\Entity\PerMaritalStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerMaritalStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerMaritalStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerMaritalStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerMaritalStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerMaritalStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerMaritalStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class PerMaritalStatusTable extends Table
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

        $this->setTable('per_marital_status');
        $this->setDisplayField('id_marital_status');
        $this->setPrimaryKey('id_marital_status');
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
            ->integer('id_marital_status')
            ->allowEmpty('id_marital_status', 'create');

        $validator
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
    }
}
