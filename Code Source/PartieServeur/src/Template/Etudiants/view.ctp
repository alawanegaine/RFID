<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Etudiant'), ['action' => 'edit', $etudiant->v_id_etu]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etudiant'), ['action' => 'delete', $etudiant->v_id_etu], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->v_id_etu)]) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="etudiants view large-10 medium-9 columns">
    <br/>
    <h2><?= $text = h($etudiant->v_nom) . ' ' . ucfirst(strtolower(h($etudiant->v_prenom))) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Numéro d\'étudiant') ?></h6>
            <p><?= h($etudiant->v_id_etu) ?></p>
            <h6 class="subheader"><?= __('Numéro de carte') ?></h6>
            <p><?= h($etudiant->v_id_carte) ?></p>
            <h6 class="subheader"><?= __('Promotion') ?></h6>
            <p><?= $text = h($etudiant->groupe->classe->v_libelle) . '-' . h($etudiant->groupe->v_libelle) ?></p>
        </div>
    </div>
</div>
<br/>
<div class="absences view large-10 medium-9 columns">
    <h3>Liste des absences</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Date') ?></th>
                <th><?= $this->Paginator->sort('Justification') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
    <tbody>
    <?php foreach ($etudiant->absence as $absence):
          if ($absence->v_statut != 'D'): ?>
        <tr>
            <td><?= $date = strftime("%H:%M %a %d %b %Y", strtotime($absence->d_abs)); ?></td>
            <td><?php if (h($absence->v_just) == "N") {
                        echo "Non";
                    } elseif (h($absence->v_just) == "O") {
                        echo "Oui";
                    } else{
                        echo "N/C";
                    }
                ?></td>
            <td class="actions">
                <?= $this->Form->postLink(__('Justifier'), ['action' => 'justifier', $absence->v_id_abs], ['confirm' => __('Etes-vous sûr de vouloir justifier l\'absence?')]) ?>
            </td>
        </tr>
        

    <?php endif;
          endforeach; ?>
    </tbody>
    </table>
</div>
