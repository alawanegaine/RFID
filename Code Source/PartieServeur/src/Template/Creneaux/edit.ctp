<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $creneaux->v_id_creneau],
                ['confirm' => __('Are you sure you want to delete # {0}?', $creneaux->v_id_creneau)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Creneaux'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="creneaux form large-10 medium-9 columns">
    <?= $this->Form->create($creneaux) ?>
    <fieldset>
        <legend><?= __('Edit Creneaux') ?></legend>
        <?php
            echo $this->Form->input('v_id_groupe');
            echo $this->Form->input('d_date_debut');
            echo $this->Form->input('d_date_fin');
            echo $this->Form->input('v_statut',[
                'type' => 'hidden',
                'value' => 't'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
