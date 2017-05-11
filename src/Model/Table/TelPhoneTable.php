<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TelPhone Model
 *
 * @method \App\Model\Entity\TelPhone get($primaryKey, $options = [])
 * @method \App\Model\Entity\TelPhone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TelPhone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TelPhone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TelPhone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhone findOrCreate($search, callable $callback = null, $options = [])
 */
class TelPhoneTable extends Table
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

        $this->setTable('tel_phone');
        $this->setDisplayField('id_phone');
        $this->setPrimaryKey('id_phone');
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
            ->integer('id_phone')
            ->allowEmpty('id_phone', 'create');

        $validator
            ->integer('id_person')
            ->requirePresence('id_person', 'create')
            ->notEmpty('id_person');

        $validator
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        $validator
            ->integer('id_phone_type')
            ->requirePresence('id_phone_type', 'create')
            ->notEmpty('id_phone_type');

        $validator
            ->integer('id_phone_company')
            ->requirePresence('id_phone_company', 'create')
            ->notEmpty('id_phone_company');

        return $validator;
    }
}
