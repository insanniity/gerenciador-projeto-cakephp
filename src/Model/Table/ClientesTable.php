<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @method \App\Model\Entity\Cliente newEmptyEntity()
 * @method \App\Model\Entity\Cliente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 255)
            ->allowEmptyString('cep');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 255)
            ->allowEmptyString('cidade');

        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 255)
            ->allowEmptyString('complemento');

        $validator
            ->scalar('cpf_ou_cnpj')
            ->maxLength('cpf_ou_cnpj', 255)
            ->allowEmptyString('cpf_ou_cnpj');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 255)
            ->allowEmptyString('empresa');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 255)
            ->allowEmptyString('endereco');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 255)
            ->allowEmptyString('estado');

        $validator
            ->scalar('insc_municipal')
            ->maxLength('insc_municipal', 255)
            ->allowEmptyString('insc_municipal');

        $validator
            ->scalar('nome_completo')
            ->maxLength('nome_completo', 255)
            ->allowEmptyString('nome_completo');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->allowEmptyString('numero');

        $validator
            ->scalar('razao_social')
            ->maxLength('razao_social', 255)
            ->allowEmptyString('razao_social');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 255)
            ->allowEmptyString('responsavel');

        $validator
            ->scalar('socio')
            ->maxLength('socio', 255)
            ->allowEmptyString('socio');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 255)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('wpp')
            ->maxLength('wpp', 255)
            ->allowEmptyString('wpp');

        $validator
            ->scalar('wpp_socio')
            ->maxLength('wpp_socio', 255)
            ->allowEmptyString('wpp_socio');

        return $validator;
    }
}
