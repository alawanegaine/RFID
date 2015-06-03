<?php
namespace App\Controller;

use App\Controller\AppController;

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
            'contain' => []
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
        $this->set(compact('etudiant'));
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
        $this->set(compact('etudiant'));
        $this->set('_serialize', ['etudiant']);
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
}
