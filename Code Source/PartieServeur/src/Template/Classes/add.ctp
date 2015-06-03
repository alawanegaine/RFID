<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="classes form large-10 medium-9 columns">
    <?= $this->Form->create($class) ?>
    <fieldset>
        <legend><?= __('Add Class') ?></legend>
        <?php
            echo $this->Form->input('v_libelle');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
