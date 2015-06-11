<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Form\AbsencesForm;

/**
 * Absences Controller
 *
 * @property \App\Model\Table\AbsencesTable $Absences
 */
class AbsencesController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->LoadModel('classes');
        $this->set('absences', $this->Absences->find('all')->contain(['etudiants', 
                                                                      'Etudiants.groupes', 
                                                                      'Etudiants.Groupes.classes']));
        $this->set('_serialize', ['absences']);
        
        $contact = new AbsencesForm();
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->data)) {
                $this->Flash->success('Nous reviendrons vers vous rapidement.');
            } else {
                $this->Flash->error('Il y a eu un problème lors de la soumission de votre formulaire.');
            }
        }
        $this->set('contact', $contact);
    }

    /**
     * View method
     *
     * @param string|null $id Absence id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $absence = $this->Absences->get($id, [
            'contain' => []
        ]);
        $this->set('absence', $absence);
        $this->set('_serialize', ['absence']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $absence = $this->Absences->newEntity();
        if ($this->request->is('post')) {
            $absence = $this->Absences->patchEntity($absence, $this->request->data);
            if ($this->Absences->save($absence)) {
                $this->Flash->success(__('The absence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The absence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('absence'));
        $this->set('_serialize', ['absence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Absence id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $absence = $this->Absences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $absence = $this->Absences->patchEntity($absence, $this->request->data);
            if ($this->Absences->save($absence)) {
                $this->Flash->success(__('The absence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The absence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('absence'));
        $this->set('_serialize', ['absence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Absence id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $absence = $this->Absences->get($id);
        if ($this->Absences->delete($absence)) {
            $this->Flash->success(__('The absence has been deleted.'));
        } else {
            $this->Flash->error(__('The absence could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function justifier($id_absence = null){
        $this->request->allowMethod(['post', 'delete']);
        
        $absencesTable = TableRegistry::get('Absences');
        $absence= $absencesTable->get($id_absence);
        
        if($absence->v_just == 'O'){
            $this->Flash->default(__('L\'absence est déjà justifiée'));
            return $this->redirect(['action' => 'index']);
        }
        $absence->v_just = 'O';
        if($absencesTable->save($absence)){
            $this->Flash->success(__('L\'absence a bien été justifiée'));
        }else{
            $this->Flash->error(__('Un problème est survenu lors de la justification de l\'absence'));
        }
        
        return $this->redirect(['action' => 'index']);
    }
    
    public function filtrer($nom = null){
        debug("coucou");
    }
}
