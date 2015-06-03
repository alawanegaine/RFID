<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Creneaux'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="creneaux index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('v_id_creneau') ?></th>
            <th><?= $this->Paginator->sort('v_id_groupe') ?></th>
            <th><?= $this->Paginator->sort('d_date_emarg') ?></th>
            <th><?= $this->Paginator->sort('d_date_synchro') ?></th>
            <th><?= $this->Paginator->sort('v_statut') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($creneaux as $creneaux): ?>
        <tr>
            <td><?= h($creneaux->v_id_creneau) ?></td>
            <td><?= h($creneaux->v_id_groupe) ?></td>
            <td><?= h($creneaux->d_date_emarg) ?></td>
            <td><?= h($creneaux->d_date_synchro) ?></td>
            <td><?= h($creneaux->v_statut) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $creneaux->v_id_creneau]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creneaux->v_id_creneau]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $creneaux->v_id_creneau], ['confirm' => __('Are you sure you want to delete # {0}?', $creneaux->v_id_creneau)]) ?>
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
