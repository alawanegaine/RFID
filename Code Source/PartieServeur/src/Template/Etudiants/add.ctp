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
            echo $this->Form->input('v_id_etu',['label' => 'N° Etudiant']);
            echo $this->Form->input('v_id_carte',['label' => 'Id carte']);
            echo $this->Form->input('v_prenom',['label' => 'Prénom']);
            echo $this->Form->input('v_nom',['label' => 'Nom']);
<<<<<<< Updated upstream
            echo $this->Form->select('v_id_groupe',$groupes,['label' => 'Promotion']);
=======
            echo $this->Form->input('v_id_groupe',['label' => 'Promotion'] );
>>>>>>> Stashed changes
            //echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
