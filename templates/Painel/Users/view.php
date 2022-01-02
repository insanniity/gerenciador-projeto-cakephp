<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="col-3">
        <?= $this->Html->link(__('Listar usuárioS'), ['action' => 'index'], ['class' => 'btn bg-gradient-success w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'btn bg-gradient-primary w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Html->link(__('Editar usuário'), ['action' => 'edit', $user->id] , ['class' => 'btn bg-gradient-warning w-100 mb-0']) ?>
    </div>
    <div class="col-3">
        <?= $this->Form->postLink(__('Delete usuário'), ['action' => 'delete', $user->id], ['class' => 'btn bg-gradient-danger w-100 mb-0', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body p-5">
                <h3><?= h($user->name) ?></h3>
                <table class="table">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nome') ?></th>
                        <td><?= h($user->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Criado') ?></th>
                        <td><?= $this->Time->format(h($user->created), 'dd/MM/Y') ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Atualizado') ?></th>
                        <td><?= $this->Time->format(h($user->modified), 'dd/MM/Y') ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Status') ?></th>
                        <td><?= $user->status ? __('Ativo') : __('Desativado'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
