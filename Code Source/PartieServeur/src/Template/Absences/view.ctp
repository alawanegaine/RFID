<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Absence'), ['action' => 'edit', $absence->v_id_abs]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Absence'), ['action' => 'delete', $absence->v_id_abs], ['confirm' => __('Are you sure you want to delete # {0}?', $absence->v_id_abs)]) ?> </li>
        <li><?= $this->Html->link(__('List Absences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Absence'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="absences view large-10 medium-9 columns">
    <h2><?= h($absence->v_id_abs) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('V Id Abs') ?></h6>
            <p><?= h($absence->v_id_abs) ?></p>
            <h6 class="subheader"><?= __('V Id Etu') ?></h6>
            <p><?= h($absence->v_id_etu) ?></p>
            <h6 class="subheader"><?= __('V Just') ?></h6>
            <p><?= h($absence->v_just) ?></p>
            <h6 class="subheader"><?= __('V Statut') ?></h6>
            <p><?= h($absence->v_statut) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('D Abs') ?></h6>
            <p><?= h($absence->d_abs) ?></p>
        </div>
    </div>
</div>
