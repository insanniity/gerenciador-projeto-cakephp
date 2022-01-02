<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="col-lg-4 col-md-8 col-12 mx-auto">
    <div class="card z-index-0 fadeIn3 fadeInBottom">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login</h4>
            </div>
        </div>
        <div class="card-body">
            <?= $this->Form->create() ?>
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <?= $this->Form->input('email', ['class' =>  'form-control', 'label' => false, 'type' => 'email']) ?>
                </div>
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Senha</label>
                    <?= $this->Form->input('password', ['class' =>  'form-control', 'label' => false, 'type' => 'password']) ?>
                </div>
                <div class="text-center">
                    <?= $this->Form->button(__('Login'), ['class' =>  'btn bg-gradient-primary w-100 my-4 mb-2']); ?>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

