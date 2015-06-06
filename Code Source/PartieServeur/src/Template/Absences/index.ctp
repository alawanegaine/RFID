<h1>Absences</h1>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Absence'), ['action' => 'add']) ?></li>
    </ul>
</div>
<!-- Filtres de la liste d'absences -->
<div class="columns large-10 platform checks">
    <table>
        <tr>
            <th><?= $this->Form->text('pute',['class' => 'puteclass', 'placeholder' => 'pute']); ?></th>
            <th><?= $this->Form->text('coucou',['class' => 'coucouclass', 'placeholder' => 'coucou']); ?></th>
            <th>Coucou5</th>
        </tr>
    </table>
</div>
<div class="absences index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Nom') ?></th>
            <th><?= $this->Paginator->sort('Prénom') ?></th>
            <th><?= $this->Paginator->sort('Promotion') ?></th>
            <th><?= $this->Paginator->sort('Date') ?></th>
            <th><?= $this->Paginator->sort('Justification') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($absences as $absence): ?>
        <tr>
            <td><?= h($absence->etudiant->v_nom) ?></td>
            <td><?= h($absence->etudiant->v_prenom) ?></td>
            <td><?= h($absence->classe->v_libelle) ?></td>
            <td><?php 
                      echo $date = strftime("%H:%M %a %d %b %Y", strtotime($absence->d_abs)); 
                ?>
            </td>
            <td><?php if (h($absence->v_just) == "N") {
                        echo "Non";
                    } else {
                        echo "Oui";
                    }
                ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $absence->v_id_abs]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $absence->v_id_abs]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $absence->v_id_abs], ['confirm' => __('Are you sure you want to delete # {0}?', $absence->v_id_abs)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
