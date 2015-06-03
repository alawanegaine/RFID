<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $groupe->v_id_groupe],
                ['confirm' => __('Are you sure you want to delete # {0}?', $groupe->v_id_groupe)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="groupes form large-10 medium-9 columns">
    <?= $this->Form->create($groupe) ?>
    <fieldset>
        <legend><?= __('Edit Groupe') ?></legend>
        <?php
            echo $this->Form->input('v_id_classe');
            echo $this->Form->input('v_libelle');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
