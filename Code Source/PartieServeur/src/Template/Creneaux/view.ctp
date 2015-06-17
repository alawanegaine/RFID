<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Creneaux'), ['action' => 'edit', $creneaux->v_id_creneau]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Creneaux'), ['action' => 'delete', $creneaux->v_id_creneau], ['confirm' => __('Are you sure you want to delete # {0}?', $creneaux->v_id_creneau)]) ?> </li>
        <li><?= $this->Html->link(__('List Creneaux'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Creneaux'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="creneaux view large-10 medium-9 columns">
    <h2><?= h($creneaux->v_id_creneau) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Promotion') ?></h6>
            <p><?= h($creneaux->groupe->classe->v_libelle) . '-' . h($creneaux->groupe->v_libelle) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date de début') ?></h6>
            <p><?= h($creneaux->d_date_debut) ?></p>
            <h6 class="subheader"><?= __('Date de fin') ?></h6>
            <p><?= h($creneaux->d_date_fin) ?></p>
        </div>
    </div>
</div>
