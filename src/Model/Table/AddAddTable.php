<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AddAdd Model
 *
 * @method \App\Model\Entity\AddAdd get($primaryKey, $options = [])
 * @method \App\Model\Entity\AddAdd newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AddAdd[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AddAdd|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AddAdd patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AddAdd[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AddAdd findOrCreate($search, callable $callback = null, $options = [])
 */
class AddAddTable extends Table
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

        $this->setTable('add_add');
        $this->setDisplayField('id_add');
        $this->setPrimaryKey('id_add');
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
            ->integer('id_add')
            ->allowEmpty('id_add', 'create');

        $validator
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->allowEmpty('cp');

        $validator
            ->allowEmpty('district');

        return $validator;
    }
}
