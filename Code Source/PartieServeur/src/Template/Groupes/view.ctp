<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Groupe'), ['action' => 'edit', $groupe->v_id_groupe]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Groupe'), ['action' => 'delete', $groupe->v_id_groupe], ['confirm' => __('Are you sure you want to delete # {0}?', $groupe->v_id_groupe)]) ?> </li>
        <li><?= $this->Html->link(__('List Groupes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groupe'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="groupes view large-10 medium-9 columns">
    <h2><?= h($groupe->v_id_groupe) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('V Id Groupe') ?></h6>
            <p><?= h($groupe->v_id_groupe) ?></p>
            <h6 class="subheader"><?= __('V Id Classe') ?></h6>
            <p><?= h($groupe->v_id_classe) ?></p>
            <h6 class="subheader"><?= __('V Libelle') ?></h6>
            <p><?= h($groupe->v_libelle) ?></p>
            <h6 class="subheader"><?= __('V Statut') ?></h6>
            <p><?= h($groupe->v_statut) ?></p>
        </div>
    </div>
</div>
