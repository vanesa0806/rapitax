<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehiculo Entity
 *
 * @property int $id
 * @property string $placa
 * @property string $modelo
 * @property string $marca
 * @property string $año
 * @property string $estado
 *
 * @property \App\Model\Entity\Servicio[] $servicios
 */
class Vehiculo extends Entity
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
        'placa' => true,
        'modelo' => true,
        'marca' => true,
        'año' => true,
        'estado' => true,
        'servicios' => true
    ];
}
