<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body p-5">
                <?= $this->Form->create($lead) ?>
                <legend><?= __('Adicionar lead') ?></legend>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Nome</label>
                    <?= $this->Form->input('nome', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <?= $this->Form->input('email', ['class' => 'form-control', 'type' => 'email']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Whatsapp</label>
                    <?= $this->Form->input('whatsapp', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Data de Nascimento</label>
                    <?= $this->Form->input('data_nascimento', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Cidade</label>
                    <?= $this->Form->input('cidade', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Estado</label>
                    <?= $this->Form->input('estado', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Fonte</label>
                    <?= $this->Form->input('fonte', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Instagram</label>
                    <?= $this->Form->input('instagram', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Redes Sociais</label>
                    <?= $this->Form->input('redes_sociais', ['class' => 'form-control', 'type' => 'text']); ?>
                </div>

                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
