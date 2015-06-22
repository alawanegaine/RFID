<h1>Créneaux libres</h1>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nouveau Creneau libre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Retour'), ['controller' => 'absences', 'action' => 'index']) ?></li>
    </ul>
</div>
<div class="creneaux index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Promotion') ?></th>
            <th><?= $this->Paginator->sort('Heure de début') ?></th>
            <th><?= $this->Paginator->sort('Heure de fin') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($creneaux as $creneaux): ?>
        <tr>
            <td><?= $text = h($creneaux->groupe->classe->v_libelle) . '-' . h($creneaux->groupe->v_libelle) ?></td>
            <td><?= h($creneaux->d_date_debut) ?></td>
            <td><?= h($creneaux->d_date_fin) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $creneaux->v_id_creneau]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creneaux->v_id_creneau]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $creneaux->v_id_creneau], ['confirm' => __('Are you sure you want to delete # {0}?', $creneaux->v_id_creneau)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
