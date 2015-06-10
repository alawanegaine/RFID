<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Creneaux'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="creneaux form large-10 medium-9 columns">
    <?= $this->Form->create($creneaux) ?>
    <fieldset>
        <legend><?= __('Add Creneaux') ?></legend>
        <?php
            echo $this->Form->input('v_id_groupe');
            echo $this->Form->input('d_date_emarg');
            echo $this->Form->input('d_date_synchro');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>