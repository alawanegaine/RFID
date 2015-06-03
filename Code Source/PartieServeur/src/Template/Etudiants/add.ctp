<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="etudiants form large-10 medium-9 columns">
    <?= $this->Form->create($etudiant) ?>
    <fieldset>
        <legend><?= __('Add Etudiant') ?></legend>
        <?php
            echo $this->Form->input('v_id_carte');
            echo $this->Form->input('v_prenom');
            echo $this->Form->input('v_nom');
            echo $this->Form->input('v_id_groupe');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
