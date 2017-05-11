<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TelPhoneType Model
 *
 * @method \App\Model\Entity\TelPhoneType get($primaryKey, $options = [])
 * @method \App\Model\Entity\TelPhoneType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TelPhoneType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TelPhoneType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneType findOrCreate($search, callable $callback = null, $options = [])
 */
class TelPhoneTypeTable extends Table
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

        $this->setTable('tel_phone_type');
        $this->setDisplayField('id_phone_type');
        $this->setPrimaryKey('id_phone_type');
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
            ->integer('id_phone_type')
            ->allowEmpty('id_phone_type', 'create');

        $validator
            ->allowEmpty('value');

        return $validator;
    }
}
