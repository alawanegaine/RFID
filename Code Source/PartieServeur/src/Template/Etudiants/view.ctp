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
    <h2><?= h($etudiant->v_id_etu) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('V Id Etu') ?></h6>
            <p><?= h($etudiant->v_id_etu) ?></p>
            <h6 class="subheader"><?= __('V Id Carte') ?></h6>
            <p><?= h($etudiant->v_id_carte) ?></p>
            <h6 class="subheader"><?= __('V Prenom') ?></h6>
            <p><?= h($etudiant->v_prenom) ?></p>
            <h6 class="subheader"><?= __('V Nom') ?></h6>
            <p><?= h($etudiant->v_nom) ?></p>
            <h6 class="subheader"><?= __('V Id Groupe') ?></h6>
            <p><?= h($etudiant->v_id_groupe) ?></p>
            <h6 class="subheader"><?= __('V Statut') ?></h6>
            <p><?= h($etudiant->v_statut) ?></p>
        </div>
    </div>
</div>
