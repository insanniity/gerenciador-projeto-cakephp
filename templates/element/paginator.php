
<nav class="row mt-4 px-5">
    <div class="col-lg-6">
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} de {{count}}')) ?></p>
    </div>
    <div class="col-lg-6">
        <ul class="pagination justify-content-end">
            <?= $this->Paginator->first() ?>
            <?= $this->Paginator->prev('<') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('>') ?>
            <?= $this->Paginator->last() ?>
        </ul>
    </div>
</nav>
