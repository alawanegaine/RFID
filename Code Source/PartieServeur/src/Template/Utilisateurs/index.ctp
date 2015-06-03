<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Utilisateur'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="utilisateurs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('v_id_user') ?></th>
            <th><?= $this->Paginator->sort('v_prenom') ?></th>
            <th><?= $this->Paginator->sort('v_nom') ?></th>
            <th><?= $this->Paginator->sort('v_type') ?></th>
            <th><?= $this->Paginator->sort('v_login') ?></th>
            <th><?= $this->Paginator->sort('v_mdp') ?></th>
            <th><?= $this->Paginator->sort('v_statut') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($utilisateurs as $utilisateur): ?>
        <tr>
            <td><?= h($utilisateur->v_id_user) ?></td>
            <td><?= h($utilisateur->v_prenom) ?></td>
            <td><?= h($utilisateur->v_nom) ?></td>
            <td><?= h($utilisateur->v_type) ?></td>
            <td><?= h($utilisateur->v_login) ?></td>
            <td><?= h($utilisateur->v_mdp) ?></td>
            <td><?= h($utilisateur->v_statut) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $utilisateur->v_id_user]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utilisateur->v_id_user]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utilisateur->v_id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->v_id_user)]) ?>
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
