<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TelPhone Entity
 *
 * @property int $id_phone
 * @property int $id_person
 * @property string $value
 * @property int $id_phone_type
 * @property int $id_phone_company
 */
class TelPhone extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_phone' => false
    ];
}
