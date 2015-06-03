<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Absence'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="absences index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('v_id_abs') ?></th>
            <th><?= $this->Paginator->sort('v_id_etu') ?></th>
            <th><?= $this->Paginator->sort('d_abs') ?></th>
            <th><?= $this->Paginator->sort('v_just') ?></th>
            <th><?= $this->Paginator->sort('v_statut') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($absences as $absence): ?>
        <tr>
            <td><?= h($absence->v_id_abs) ?></td>
            <td><?= h($absence->v_id_etu) ?></td>
            <td><?= h($absence->d_abs) ?></td>
            <td><?= h($absence->v_just) ?></td>
            <td><?= h($absence->v_statut) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $absence->v_id_abs]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $absence->v_id_abs]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $absence->v_id_abs], ['confirm' => __('Are you sure you want to delete # {0}?', $absence->v_id_abs)]) ?>
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
