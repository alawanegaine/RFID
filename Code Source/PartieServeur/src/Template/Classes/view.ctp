<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Class'), ['action' => 'edit', $class->v_id_classe]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Class'), ['action' => 'delete', $class->v_id_classe], ['confirm' => __('Are you sure you want to delete # {0}?', $class->v_id_classe)]) ?> </li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Class'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="classes view large-10 medium-9 columns">
    <h2><?= h($class->v_id_classe) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('V Id Classe') ?></h6>
            <p><?= h($class->v_id_classe) ?></p>
            <h6 class="subheader"><?= __('V Libelle') ?></h6>
            <p><?= h($class->v_libelle) ?></p>
            <h6 class="subheader"><?= __('V Statut') ?></h6>
            <p><?= h($class->v_statut) ?></p>
        </div>
    </div>
</div>
