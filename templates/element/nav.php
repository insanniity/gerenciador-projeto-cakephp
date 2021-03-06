<?php
/**
 * @var \App\View\AppView $this
 */
?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <?= $this->Html->image('logo-ct.png', ['class' => 'navbar-brand-img h-100']) ?>
            <span class="ms-1 font-weight-bold text-white">Gerenciador de projetos</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?= ($this->request->getParam('controller') == 'Users') ? 'active bg-gradient-primary' : '' ?>  " href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index', 'prefix'=> 'Painel']) ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">manage_accounts</i>
                    </div>
                    <span class="nav-link-text ms-1">Usuários</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($this->request->getParam('controller') == 'Leads') ? 'active  bg-gradient-primary' : '' ?> " href="<?= $this->Url->build(['controller' => 'Leads', 'action' => 'index', 'prefix'=> 'Painel']) ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person_search</i>
                    </div>
                    <span class="nav-link-text ms-1">Leads</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= ($this->request->getParam('controller') == 'Clientes') ? 'active  bg-gradient-primary' : '' ?> " href="<?= $this->Url->build(['controller' => 'Clientes', 'action' => 'index', 'prefix'=> 'Painel']) ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <span class="nav-link-text ms-1">Leads</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
