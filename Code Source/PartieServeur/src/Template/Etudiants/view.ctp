<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Etudiant'), ['action' => 'edit', $etudiant->v_id_etu]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etudiant'), ['action' => 'delete', $etudiant->v_id_etu], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->v_id_etu)]) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="etudiants view large-10 medium-9 columns">
    <h2><?= $text = h($etudiant->v_nom) . ' ' . ucfirst(strtolower(h($etudiant->v_prenom))) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($etudiant->v_id_etu) ?></p>
            <h6 class="subheader"><?= __('Justification') ?></h6>
            <p><?= h($etudiant->v_id_carte) ?></p>
            <h6 class="subheader"><?= __('Nom') ?></h6>
            <p><?= h($etudiant->v_nom) ?></p>
            <h6 class="subheader"><?= __('Prénom') ?></h6>
            <p><?= ucfirst(strtolower(h($etudiant->v_prenom))) ?></p>
            <h6 class="subheader"><?= __('Promotion') ?></h6>
            <p><?= $text = h($etudiant->groupe->classe->v_libelle) . '-' . h($etudiant->groupe->v_libelle) ?></p>
        </div>
    </div>
    
    <h3>Liste des absences</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Date') ?></th>
                <th><?= $this->Paginator->sort('Justification') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
    <tbody>
    <?php foreach ($etudiant->absence as $absence): ?>
        <tr>
            <td><?= h($absence->d_abs) ?></td>
            <td><?= h($absence->v_just) ?></td>
            <td class="actions">
                <?= $this->Form->postLink(__('Justifier'), ['action' => 'justifier', $absence->v_id_abs], ['confirm' => __('Etes-vous sûr de vouloir justifier l\'absence?')]) ?>
            </td>
        </tr>
        

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
