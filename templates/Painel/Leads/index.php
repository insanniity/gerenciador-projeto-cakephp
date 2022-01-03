<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead[]|\Cake\Collection\CollectionInterface $leads
 */
?>
<div class="row">
    <div class="col-2">
        <?= $this->Html->link(__('Novo lead'), ['action' => 'add'], ['class' => 'btn bg-gradient-primary w-100 mb-0']) ?>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('id') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('nome') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('data_nascimento') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('email') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('whatsapp') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Cidade/<?= $this->Paginator->sort('estado') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('fonte') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('instagram') ?></th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7"><?= $this->Paginator->sort('redes_sociais') ?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($leads as $lead): ?>
                            <tr>
                                <td class="px-4">
                                      <span class="text-secondary text-xs font-weight-bold">
                                         <?= $this->Number->format($lead->id) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                         <?= h($lead->nome) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                         <?= h($lead->data_nascimento) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                         <?= h($lead->email) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                        <?= h($lead->whatsapp) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                         <?= h($lead->cidade) ?>/<?= h($lead->estado) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                          <?= h($lead->fonte) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                          <?= h($lead->instagram) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                          <?= h($lead->redes_sociais) ?>
                                    </span>
                                </td>
                                <td class="d-flex">
                                    <?= $this->Html->link(__('<i class="material-icons text-lg">visibility</i>'), ['action' => 'view', $lead->id], ['class' => 'btn btn-icon-only btn-rounded btn-outline-success me-1 p-3 btn-sm d-flex align-items-center justify-content-center', 'escape' => false]) ?>
                                    <?= $this->Html->link(__('<i class="material-icons text-lg">edit</i>'), ['action' => 'edit', $lead->id], ['class' => 'btn btn-icon-only btn-rounded btn-outline-secondary me-1 p-3 btn-sm d-flex align-items-center justify-content-center', 'escape' => false]) ?>
                                    <?= $this->Form->postLink(__('<i class="material-icons text-lg">delete</i>'), ['action' => 'delete', $lead->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lead->id), 'class' => 'btn btn-icon-only btn-rounded btn-outline-danger me-1 p-3 btn-sm d-flex align-items-center justify-content-center', 'escape' => false]) ?>
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





