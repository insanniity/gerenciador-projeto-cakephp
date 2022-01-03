<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>
<div class="row">
    <div class="col-3">
        <?= $this->Html->link(__('Listar leads'), ['action' => 'index'], ['class' => 'btn bg-gradient-success w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Html->link(__('Novo lead'), ['action' => 'add'], ['class' => 'btn bg-gradient-primary w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Html->link(__('Editar lead'), ['action' => 'edit', $lead->id] , ['class' => 'btn bg-gradient-warning w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Form->postLink(__('Delete lead'), ['action' => 'delete', $lead->id], ['class' => 'btn bg-gradient-danger w-100 mb-0', 'confirm' => __('Are you sure you want to delete # {0}?', $lead->id)]) ?>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body p-5">
                <h3><?= h($lead->nome) ?></h3>
                <table class="table">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($lead->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nome') ?></th>
                        <td><?= h($lead->nome) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Data Nascimento') ?></th>
                        <td><?= h($lead->data_nascimento) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($lead->email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Whatsapp') ?></th>
                        <td><?= h($lead->whatsapp) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cidade') ?></th>
                        <td><?= h($lead->cidade) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Estado') ?></th>
                        <td><?= h($lead->estado) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Fonte') ?></th>
                        <td><?= h($lead->fonte) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Instagram') ?></th>
                        <td><?= h($lead->instagram) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Redes Sociais') ?></th>
                        <td><?= h($lead->redes_sociais) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Criado') ?></th>
                        <td><?= $this->Time->format(h($lead->created), 'dd/MM/Y') ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Atualizado') ?></th>
                        <td><?= $this->Time->format(h($lead->modified), 'dd/MM/Y') ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

