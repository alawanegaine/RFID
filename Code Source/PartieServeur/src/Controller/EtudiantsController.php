<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Etudiants Controller
 *
 * @property \App\Model\Table\EtudiantsTable $Etudiants
 */
class EtudiantsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('etudiants', $this->paginate($this->Etudiants));
        $this->set('_serialize', ['etudiants']);
        $this->set('etudiants', $this->Etudiants->find('all')->contain(['groupes',
                                                                        'Groupes.classes']));
    }

    /**
     * View method
     *
     * @param string|null $id Etudiant id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etudiant = $this->Etudiants->get($id, [
            'contain' => ['absences',
                          'groupes',
                          'Groupes.classes']
        ]);
       
       $this->set('etudiant', $etudiant);
       $this->set('_serialize', ['etudiant']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etudiant = $this->Etudiants->newEntity();
        if ($this->request->is('post')) {
            $etudiant = $this->Etudiants->patchEntity($etudiant, $this->request->data);
            if ($this->Etudiants->save($etudiant)) {
                $this->Flash->success(__('The etudiant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The etudiant could not be saved. Please, try again.'));
            }
        }
        $this->set('etudiant', $etudiant);
        //$this->set(compact('etudiant'));
        $this->set('_serialize', ['etudiant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Etudiant id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etudiant = $this->Etudiants->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etudiant = $this->Etudiants->patchEntity($etudiant, $this->request->data);
            if ($this->Etudiants->save($etudiant)) {
                $this->Flash->success(__('The etudiant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The etudiant could not be saved. Please, try again.'));
            }
        }
        $this->set('etudiant', $etudiant);
        //$this->set(compact('etudiant'));
        $this->set('_serialize', ['etudiant']);
        
        $this->set('groupes',TableRegistry::get('Groupes')->find('list',[
            'keyField' => 'v_id_groupe',
            'valueField' => 'toto'
        ])->contain(['Classes'])); 
    }

    /**
     * Delete method
     *
     * @param string|null $id Etudiant id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etudiant = $this->Etudiants->get($id);
        if ($this->Etudiants->delete($etudiant)) {
            $this->Flash->success(__('The etudiant has been deleted.'));
        } else {
            $this->Flash->error(__('The etudiant could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function justifier($id_absence = null){
        $this->request->allowMethod(['post', 'delete']);
        
        $absencesTable = TableRegistry::get('Absences');
        $absence= $absencesTable->get($id_absence);
        
        if($absence->v_just == 'O'){
            $this->Flash->default(__('L\'absence est déjà justifiée'));
            return $this->redirect(['action' => 'view/'.$absence->v_id_etu]);
        }
        $absence->v_just = 'O';
        if($absencesTable->save($absence)){
            $this->Flash->success(__('L\'absence a bien été justifiée'));
        }else{
            $this->Flash->error(__('Un problème est survenu lors de la justification de l\'absence'));
        }
        
        return $this->redirect(['action' => 'view/'.$absence->v_id_etu]);
    }
    
    public function importCsv(){
        
    }
}
