<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $absence->v_id_abs],
                ['confirm' => __('Are you sure you want to delete # {0}?', $absence->v_id_abs)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Absences'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="absences form large-10 medium-9 columns">
    <?= $this->Form->create($absence) ?>
    <fieldset>
        <legend><?= __('Edit Absence') ?></legend>
        <?php
            echo $this->Form->input('v_id_etu');
            echo $this->Form->input('d_abs');
            echo $this->Form->input('v_just');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
