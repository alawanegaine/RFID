<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etudiant->v_id_etu],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->v_id_etu)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="etudiants form large-10 medium-9 columns">
    <?= $this->Form->create($etudiant) ?>
    <fieldset>
        <legend><?= __('Edit Etudiant') ?></legend>
        <?php
            echo $this->Form->input('v_id_etu',['label' => 'N° Etudiant']);
            echo $this->Form->input('v_id_carte',['label' => 'Id carte']);
            echo $this->Form->input('v_prenom',['label' => 'Prénom']);
            echo $this->Form->input('v_nom',['label' => 'Nom']);
            echo $this->Form->select('v_id_groupe',$groupes,['label' => 'Promotion']);
            //echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
