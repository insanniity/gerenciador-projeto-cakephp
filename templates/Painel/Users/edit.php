<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body p-5">
                <?= $this->Form->create($user) ?>
                <legend><?= __('Editar usuário') ?></legend>
                <div class="input-group input-group-outline is-filled my-3">
                    <label class="form-label">Nome</label>
                    <?= $this->Form->input('name', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline is-filled my-3">
                    <label class="form-label">Email</label>
                    <?= $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'label'=> false]); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Senha</label>
                    <?= $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'value' => '']); ?>
                </div>
                <select class="form-select mb-3 px-3 form-select-input" aria-label="Default select example" name="status">
                    <option value="1">Ativo</option>
                    <option value="0">Desativado</option>
                </select>
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
