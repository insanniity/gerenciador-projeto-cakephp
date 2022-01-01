<nav class="top-nav">
    <div class="top-nav-title">
        <a href="<?= $this->Url->build('/') ?>"><span>Gerenciador de</span> projetos</a>
    </div>
    <div class="top-nav-links">
        <?= $this->Html->linkFromPath('Usuarios','Painel/Users::index'); ?>
        <?= $this->Html->linkFromPath('Logout', 'Auth::logout'); ?>
    </div>
</nav>
