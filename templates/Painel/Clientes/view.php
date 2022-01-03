<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <div class="col-3">
        <?= $this->Html->link(__('Listar clientes'), ['action' => 'index'], ['class' => 'btn bg-gradient-success w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Html->link(__('Novo cliente'), ['action' => 'add'], ['class' => 'btn bg-gradient-primary w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Html->link(__('Editar cliente'), ['action' => 'edit', $cliente->id] , ['class' => 'btn bg-gradient-warning w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Form->postLink(__('Delete cliente'), ['action' => 'delete', $cliente->id], ['class' => 'btn bg-gradient-danger w-100 mb-0', 'confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body p-5">
                <h3><?= h($cliente->empresa) ?></h3>
                <table class="table">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($cliente->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Empresa') ?></th>
                        <td><?= h($cliente->empresa) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('CPF/CNPJ') ?></th>
                        <td><?= h($cliente->cpf_ou_cnpj) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Insc Municipal') ?></th>
                        <td><?= h($cliente->insc_municipal) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nome Completo') ?></th>
                        <td><?= h($cliente->nome_completo) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Razao Social') ?></th>
                        <td><?= h($cliente->razao_social) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Telefone') ?></th>
                        <td><?= h($cliente->telefone) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Wpp') ?></th>
                        <td><?= h($cliente->wpp) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Responsavel') ?></th>
                        <td><?= h($cliente->responsavel) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Socio') ?></th>
                        <td><?= h($cliente->socio) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Wpp Socio') ?></th>
                        <td><?= h($cliente->wpp_socio) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cep') ?></th>
                        <td><?= h($cliente->cep) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Endereco') ?></th>
                        <td><?= h($cliente->endereco) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Numero') ?></th>
                        <td><?= h($cliente->numero) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Complemento') ?></th>
                        <td><?= h($cliente->complemento) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cidade') ?></th>
                        <td><?= h($cliente->cidade) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Estado') ?></th>
                        <td><?= h($cliente->estado) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($cliente->email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Criado') ?></th>
                        <td><?= $this->Time->format(h($cliente->created), 'dd/MM/Y') ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Atualizado') ?></th>
                        <td><?= $this->Time->format(h($cliente->modified), 'dd/MM/Y') ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
