<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lead Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $cidade
 * @property string|null $data_nascimento
 * @property string|null $email
 * @property string|null $estado
 * @property string|null $fonte
 * @property string|null $instagram
 * @property string|null $nome
 * @property string|null $redes_sociais
 * @property string|null $whatsapp
 */
class Lead extends Entity
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
        'created' => true,
        'modified' => true,
        'cidade' => true,
        'data_nascimento' => true,
        'email' => true,
        'estado' => true,
        'fonte' => true,
        'instagram' => true,
        'nome' => true,
        'redes_sociais' => true,
        'whatsapp' => true,
    ];
}
