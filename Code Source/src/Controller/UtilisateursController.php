<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Utilisateurs Controller
 *
 * @property \App\Model\Table\UtilisateursTable $Utilisateurs
 */
class UtilisateursController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('utilisateurs', $this->paginate($this->Utilisateurs));
        $this->set('_serialize', ['utilisateurs']);
    }

    /**
     * View method
     *
     * @param string|null $id Utilisateur id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utilisateur = $this->Utilisateurs->get($id, [
            'contain' => []
        ]);
        $this->set('utilisateur', $utilisateur);
        $this->set('_serialize', ['utilisateur']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utilisateur = $this->Utilisateurs->newEntity();
        if ($this->request->is('post')) {
            $utilisateur = $this->Utilisateurs->patchEntity($utilisateur, $this->request->data);
            if ($this->Utilisateurs->save($utilisateur)) {
                $this->Flash->success(__('The utilisateur has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The utilisateur could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('utilisateur'));
        $this->set('_serialize', ['utilisateur']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Utilisateur id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utilisateur = $this->Utilisateurs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilisateur = $this->Utilisateurs->patchEntity($utilisateur, $this->request->data);
            if ($this->Utilisateurs->save($utilisateur)) {
                $this->Flash->success(__('The utilisateur has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The utilisateur could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('utilisateur'));
        $this->set('_serialize', ['utilisateur']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Utilisateur id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilisateur = $this->Utilisateurs->get($id);
        if ($this->Utilisateurs->delete($utilisateur)) {
            $this->Flash->success(__('The utilisateur has been deleted.'));
        } else {
            $this->Flash->error(__('The utilisateur could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
