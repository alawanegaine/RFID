<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Emploi du temps'), ['controller' => 'Creneaux','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gestion étudiant'), ['controller' => 'Etudiants','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Paramétrage'), ['controller' => 'Pages', 'action' => 'parametrage']) ?></li>
    </ul>
</div>
<!--<div class="absences index large-10 medium-9 columns">
    <fieldset>
        <legend><?= __('Filtres') ?></legend>
        <?php 
            echo $this->Form->create($contact);
            echo $this->Form->input('Nom');
            echo $this->Form->input('Prénom');
            echo $this->Form->button('Filtrer');
            echo $this->Form->end();
        ?>
    </fieldset>    
</div>
<!-- Filtres de la liste d'absences -->
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
    <?php foreach ($absences as $absence): 
          if($absence->v_statut != 'D'): ?>
        <tr>
            <td><?= h($absence->etudiant->v_nom) ?></td>
            <td><?= $text = ucfirst(strtolower(h($absence->etudiant->v_prenom))) ?></td>
            <td><?= $text = h($absence->etudiant->groupe->classe->v_libelle) . '-' . h($absence->etudiant->groupe->v_libelle) ?></td>
            <td><?php 
                      setlocale(LC_TIME, "fr_FR");
                      echo $date = strftime("%H:%M %a %d %b %Y", strtotime($absence->d_abs)); 
                ?>
            </td>
            <td><?php if (h($absence->v_just) == "N") {
                        echo "Non";
                    } elseif (h($absence->v_just) == "O") {
                        echo "Oui";
                    } else{
                        echo "N/C";
                    }
                ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Détail'), ['action' => '../etudiants/view', $absence->etudiant->v_id_etu]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $absence->v_id_abs]) ?>
                <?= $this->Form->postLink(__('Justifier'), ['action' => 'justifier', $absence->v_id_abs], ['confirm' => __('Etes-vous sûr de vouloir justifier l\'absence?')]) ?>
            </td>
        </tr>
    <?php endif;
          endforeach; ?>
    </tbody>
    </table>
</div>
