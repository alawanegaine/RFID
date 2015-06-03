<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Emargement'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="emargements index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('v_id_emarg') ?></th>
            <th><?= $this->Paginator->sort('v_id_carte') ?></th>
            <th><?= $this->Paginator->sort('d_date_emarg') ?></th>
            <th><?= $this->Paginator->sort('d_date_synchro') ?></th>
            <th><?= $this->Paginator->sort('v_statut') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($emargements as $emargement): ?>
        <tr>
            <td><?= h($emargement->v_id_emarg) ?></td>
            <td><?= h($emargement->v_id_carte) ?></td>
            <td><?= h($emargement->d_date_emarg) ?></td>
            <td><?= h($emargement->d_date_synchro) ?></td>
            <td><?= h($emargement->v_statut) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $emargement->v_id_emarg]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emargement->v_id_emarg]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emargement->v_id_emarg], ['confirm' => __('Are you sure you want to delete # {0}?', $emargement->v_id_emarg)]) ?>
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
