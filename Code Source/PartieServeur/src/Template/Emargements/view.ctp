<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Emargement'), ['action' => 'edit', $emargement->v_id_emarg]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emargement'), ['action' => 'delete', $emargement->v_id_emarg], ['confirm' => __('Are you sure you want to delete # {0}?', $emargement->v_id_emarg)]) ?> </li>
        <li><?= $this->Html->link(__('List Emargements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emargement'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emargements view large-10 medium-9 columns">
    <h2><?= h($emargement->v_id_emarg) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('V Id Emarg') ?></h6>
            <p><?= h($emargement->v_id_emarg) ?></p>
            <h6 class="subheader"><?= __('V Id Carte') ?></h6>
            <p><?= h($emargement->v_id_carte) ?></p>
            <h6 class="subheader"><?= __('V Statut') ?></h6>
            <p><?= h($emargement->v_statut) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('D Date Emarg') ?></h6>
            <p><?= h($emargement->d_date_emarg) ?></p>
            <h6 class="subheader"><?= __('D Date Synchro') ?></h6>
            <p><?= h($emargement->d_date_synchro) ?></p>
        </div>
    </div>
</div>
