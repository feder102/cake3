<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AddAddType Model
 *
 * @method \App\Model\Entity\AddAddType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AddAddType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AddAddType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AddAddType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AddAddType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AddAddType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AddAddType findOrCreate($search, callable $callback = null, $options = [])
 */
class AddAddTypeTable extends Table
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

        $this->setTable('add_add_type');
        $this->setDisplayField('id_add_type');
        $this->setPrimaryKey('id_add_type');
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
            ->integer('id_add_type')
            ->allowEmpty('id_add_type', 'create');

        $validator
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
    }
}
