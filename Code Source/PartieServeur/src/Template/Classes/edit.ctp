<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $class->v_id_classe],
                ['confirm' => __('Are you sure you want to delete # {0}?', $class->v_id_classe)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="classes form large-10 medium-9 columns">
    <?= $this->Form->create($class) ?>
    <fieldset>
        <legend><?= __('Edit Class') ?></legend>
        <?php
            echo $this->Form->input('v_libelle');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
