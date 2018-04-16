<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detail Entity
 *
 * @property int $id
 * @property string $relationship
 * @property int $familie_id
 * @property int $person_id
 *
 * @property \App\Model\Entity\Family $family
 * @property \App\Model\Entity\Person $person
 */
class Detail extends Entity
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
        'relationship' => true,
        'familie_id' => true,
        'person_id' => true,
        'family' => true,
        'person' => true
    ];
}
