<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emargement->v_id_emarg],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emargement->v_id_emarg)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Emargements'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="emargements form large-10 medium-9 columns">
    <?= $this->Form->create($emargement) ?>
    <fieldset>
        <legend><?= __('Edit Emargement') ?></legend>
        <?php
            echo $this->Form->input('v_id_carte');
            echo $this->Form->input('d_date_emarg');
            echo $this->Form->input('d_date_synchro');
            echo $this->Form->input('v_statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
