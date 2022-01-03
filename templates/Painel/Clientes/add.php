<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body p-5">
                <?= $this->Form->create($cliente) ?>
                <legend><?= __('Adicionar cliente') ?></legend>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Empresa</label>
                    <?= $this->Form->input('empresa', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Nome Completo</label>
                    <?= $this->Form->input('nome_completo', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Razão Social</label>
                    <?= $this->Form->input('razao_social', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">CPF/CNPJ</label>
                    <?= $this->Form->input('cpf_ou_cnpj', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Inscriçao municipal</label>
                    <?= $this->Form->input('insc_municipal', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Responsável</label>
                    <?= $this->Form->input('responsavel', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Telefone</label>
                    <?= $this->Form->input('telefone', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Whatsapp</label>
                    <?= $this->Form->input('wpp', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Sócio</label>
                    <?= $this->Form->input('socio', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">WhatsApp Sócio</label>
                    <?= $this->Form->input('wpp_socio', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">CEP</label>
                    <?= $this->Form->input('cep', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Endereço</label>
                    <?= $this->Form->input('endereco', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">numero</label>
                    <?= $this->Form->input('numero', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Complemento</label>
                    <?= $this->Form->input('complemento', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Cidade</label>
                    <?= $this->Form->input('cidade', ['class' => 'form-control']) ?>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Estado</label>
                    <?= $this->Form->input('estado', ['class' => 'form-control']) ?>
                </div>
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>







