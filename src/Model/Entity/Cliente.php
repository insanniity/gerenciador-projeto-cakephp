<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $cep
 * @property string|null $cidade
 * @property string|null $complemento
 * @property string|null $cpf_ou_cnpj
 * @property string|null $email
 * @property string|null $empresa
 * @property string|null $endereco
 * @property string|null $estado
 * @property string|null $insc_municipal
 * @property string|null $nome_completo
 * @property string|null $numero
 * @property string|null $razao_social
 * @property string|null $responsavel
 * @property string|null $socio
 * @property string|null $telefone
 * @property string|null $wpp
 * @property string|null $wpp_socio
 */
class Cliente extends Entity
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
        'cep' => true,
        'cidade' => true,
        'complemento' => true,
        'cpf_ou_cnpj' => true,
        'email' => true,
        'empresa' => true,
        'endereco' => true,
        'estado' => true,
        'insc_municipal' => true,
        'nome_completo' => true,
        'numero' => true,
        'razao_social' => true,
        'responsavel' => true,
        'socio' => true,
        'telefone' => true,
        'wpp' => true,
        'wpp_socio' => true,
    ];
}
