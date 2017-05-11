<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AddAdd Entity
 *
 * @property int $id_add
 * @property string $street
 * @property string $number
 * @property string $cp
 * @property string $district
 */
class AddAdd extends Entity
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
        'id_add' => false
    ];
}
