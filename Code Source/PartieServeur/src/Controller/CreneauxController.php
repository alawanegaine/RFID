<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Creneaux Controller
 *
 * @property \App\Model\Table\CreneauxTable $Creneaux
 */
class CreneauxController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->LoadModel('classes');
        $this->set('creneaux', $this->Creneaux->find('All')->contain(['groupes',
                                                                      'Groupes.classes']));
        $this->set('_serialize', ['creneaux']);
    }

    /**
     * View method
     *
     * @param string|null $id Creneaux id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creneaux = $this->Creneaux->get($id)->contain(['groupes','Groupes.classes']);
        $this->set('creneaux', $creneaux);
        $this->set('_serialize', ['creneaux']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creneaux = $this->Creneaux->newEntity();
        if ($this->request->is('post')) {
            print_r($this->request->data);
            $creneaux = $this->Creneaux->patchEntity($creneaux, $this->request->data);
            if ($this->Creneaux->save($creneaux)) {
                $this->Flash->success(__('The creneaux has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The creneaux could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('creneaux'));
        $this->set('_serialize', ['creneaux']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Creneaux id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creneaux = $this->Creneaux->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            print_r($creneaux);
            $creneaux = $this->Creneaux->patchEntity($creneaux, $this->request->data);
            if ($this->Creneaux->save($creneaux)) {
                $this->Flash->success(__('The creneaux has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The creneaux could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('creneaux'));
        $this->set('_serialize', ['creneaux']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Creneaux id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creneaux = $this->Creneaux->get($id);
        if ($this->Creneaux->delete($creneaux)) {
            $this->Flash->success(__('The creneaux has been deleted.'));
        } else {
            $this->Flash->error(__('The creneaux could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
