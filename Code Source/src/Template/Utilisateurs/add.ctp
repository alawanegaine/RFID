<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Utilisateurs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="utilisateurs form large-10 medium-9 columns">
    <?= $this->Form->create($utilisateur) ?>
    <fieldset>
        <legend><?= __('Add Utilisateur') ?></legend>
        <?php
            echo $this->Form->input('v_prenom');
            echo $this->Form->input('v_nom');
            echo $this->Form->input('v_type');
            echo $this->Form->input('v_login');
            echo $this->Form->input('v_mdp');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
