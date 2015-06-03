<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Class'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="classes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('v_id_classe') ?></th>
            <th><?= $this->Paginator->sort('v_libelle') ?></th>
            <th><?= $this->Paginator->sort('v_statut') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($classes as $class): ?>
        <tr>
            <td><?= h($class->v_id_classe) ?></td>
            <td><?= h($class->v_libelle) ?></td>
            <td><?= h($class->v_statut) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $class->v_id_classe]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $class->v_id_classe]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $class->v_id_classe], ['confirm' => __('Are you sure you want to delete # {0}?', $class->v_id_classe)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
