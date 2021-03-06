<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <div class="col-2">
        <?= $this->Html->link(__('Novo usuário'), ['action' => 'add'], ['class' => 'btn bg-gradient-primary w-100 mb-0']) ?>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="px-4">
                                    <?= $this->Number->format($user->id) ?>
                                </td>
                                <td>
                                    <?= h($user->name) ?>
                                </td>
                                <td>
                                    <?= h($user->email) ?>
                                </td>
                                <td>
                                    <?php if ($user->status): ?>
                                        <span class="badge badge-sm bg-gradient-success">Ativo</span>
                                    <?php else: ?>
                                        <span class="badge badge-sm bg-gradient-secondary">Desativado</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= $this->Time->format(h($user->created), 'dd/MM/Y') ?>
                                </td>
                                <td>
                                    <?= $this->Time->format(h($user->modified), 'dd/MM/Y') ?>
                                </td>
                                <td class="d-flex">
                                    <?= $this->Html->link(__('<i class="material-icons text-lg">visibility</i>'), ['action' => 'view', $user->id], ['class' => 'btn btn-icon-only btn-rounded btn-outline-success me-1 p-3 btn-sm d-flex align-items-center justify-content-center', 'escape' => false]) ?>
                                    <?= $this->Html->link(__('<i class="material-icons text-lg">edit</i>'), ['action' => 'edit', $user->id], ['class' => 'btn btn-icon-only btn-rounded btn-outline-secondary me-1 p-3 btn-sm d-flex align-items-center justify-content-center', 'escape' => false]) ?>
                                    <?= $this->Form->postLink(__('<i class="material-icons text-lg">delete</i>'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-icon-only btn-rounded btn-outline-danger me-1 p-3 btn-sm d-flex align-items-center justify-content-center', 'escape' => false]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?= $this->element('paginator') ?>
            </div>
        </div>
    </div>
</div>

