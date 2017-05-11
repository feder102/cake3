<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TelPhoneCompany Model
 *
 * @method \App\Model\Entity\TelPhoneCompany get($primaryKey, $options = [])
 * @method \App\Model\Entity\TelPhoneCompany newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TelPhoneCompany[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneCompany|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TelPhoneCompany patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneCompany[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneCompany findOrCreate($search, callable $callback = null, $options = [])
 */
class TelPhoneCompanyTable extends Table
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

        $this->setTable('tel_phone_company');
        $this->setDisplayField('id_phone_company');
        $this->setPrimaryKey('id_phone_company');
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
            ->integer('id_phone_company')
            ->allowEmpty('id_phone_company', 'create');

        $validator
            ->allowEmpty('value');

        return $validator;
    }
}
