<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emargements Controller
 *
 * @property \App\Model\Table\EmargementsTable $Emargements
 */
class EmargementsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('emargements', $this->paginate($this->Emargements));
        $this->set('_serialize', ['emargements']);
    }

    /**
     * View method
     *
     * @param string|null $id Emargement id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emargement = $this->Emargements->get($id, [
            'contain' => []
        ]);
        $this->set('emargement', $emargement);
        $this->set('_serialize', ['emargement']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emargement = $this->Emargements->newEntity();
        if ($this->request->is('post')) {
            $emargement = $this->Emargements->patchEntity($emargement, $this->request->data);
            if ($this->Emargements->save($emargement)) {
                $this->Flash->success(__('The emargement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emargement could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emargement'));
        $this->set('_serialize', ['emargement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emargement id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emargement = $this->Emargements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emargement = $this->Emargements->patchEntity($emargement, $this->request->data);
            if ($this->Emargements->save($emargement)) {
                $this->Flash->success(__('The emargement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emargement could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emargement'));
        $this->set('_serialize', ['emargement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emargement id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emargement = $this->Emargements->get($id);
        if ($this->Emargements->delete($emargement)) {
            $this->Flash->success(__('The emargement has been deleted.'));
        } else {
            $this->Flash->error(__('The emargement could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
