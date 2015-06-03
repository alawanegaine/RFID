<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Groupes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="groupes form large-10 medium-9 columns">
    <?= $this->Form->create($groupe) ?>
    <fieldset>
        <legend><?= __('Add Groupe') ?></legend>
        <?php
            echo $this->Form->input('v_id_classe');
            echo $this->Form->input('v_libelle');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
