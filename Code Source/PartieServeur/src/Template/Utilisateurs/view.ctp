<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Utilisateur'), ['action' => 'edit', $utilisateur->v_id_user]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Utilisateur'), ['action' => 'delete', $utilisateur->v_id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->v_id_user)]) ?> </li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="utilisateurs view large-10 medium-9 columns">
    <h2><?= h($utilisateur->v_id_user) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('V Id User') ?></h6>
            <p><?= h($utilisateur->v_id_user) ?></p>
            <h6 class="subheader"><?= __('V Prenom') ?></h6>
            <p><?= h($utilisateur->v_prenom) ?></p>
            <h6 class="subheader"><?= __('V Nom') ?></h6>
            <p><?= h($utilisateur->v_nom) ?></p>
            <h6 class="subheader"><?= __('V Type') ?></h6>
            <p><?= h($utilisateur->v_type) ?></p>
            <h6 class="subheader"><?= __('V Login') ?></h6>
            <p><?= h($utilisateur->v_login) ?></p>
            <h6 class="subheader"><?= __('V Mdp') ?></h6>
            <p><?= h($utilisateur->v_mdp) ?></p>
            <h6 class="subheader"><?= __('V Statut') ?></h6>
            <p><?= h($utilisateur->v_statut) ?></p>
        </div>
    </div>
</div>
