<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PerDocType Entity
 *
 * @property int $id_doc_type
 * @property string $value
 */
class PerDocType extends Entity
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
        'id_doc_type' => false
    ];
}
