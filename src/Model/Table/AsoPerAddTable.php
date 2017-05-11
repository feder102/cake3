<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AsoPerAdd Model
 *
 * @method \App\Model\Entity\AsoPerAdd get($primaryKey, $options = [])
 * @method \App\Model\Entity\AsoPerAdd newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AsoPerAdd[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AsoPerAdd|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AsoPerAdd patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AsoPerAdd[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AsoPerAdd findOrCreate($search, callable $callback = null, $options = [])
 */
class AsoPerAddTable extends Table
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

        $this->setTable('aso_per_add');
        $this->setDisplayField('id_person');
        $this->setPrimaryKey(['id_person', 'id_add']);
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
            ->integer('id_person')
            ->allowEmpty('id_person', 'create');

        $validator
            ->integer('id_add')
            ->allowEmpty('id_add', 'create');

        $validator
            ->integer('id_add_type')
            ->requirePresence('id_add_type', 'create')
            ->notEmpty('id_add_type');

        return $validator;
    }
}
