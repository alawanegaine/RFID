<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Groupes Controller
 *
 * @property \App\Model\Table\GroupesTable $Groupes
 */
class GroupesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('groupes', $this->paginate($this->Groupes));
        echo "coucou" ;
    }

    /**
     * View method
     *
     * @param string|null $id Groupe id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupe = $this->Groupes->get($id, [
            'contain' => []
        ]);
        $this->set('groupe', $groupe);
        $this->set('_serialize', ['groupe']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupe = $this->Groupes->newEntity();
        if ($this->request->is('post')) {
            $groupe = $this->Groupes->patchEntity($groupe, $this->request->data);
            if ($this->Groupes->save($groupe)) {
                $this->Flash->success(__('The groupe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The groupe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('groupe'));
        $this->set('_serialize', ['groupe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Groupe id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupe = $this->Groupes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupe = $this->Groupes->patchEntity($groupe, $this->request->data);
            if ($this->Groupes->save($groupe)) {
                $this->Flash->success(__('The groupe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The groupe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('groupe'));
        $this->set('_serialize', ['groupe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Groupe id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupe = $this->Groupes->get($id);
        if ($this->Groupes->delete($groupe)) {
            $this->Flash->success(__('The groupe has been deleted.'));
        } else {
            $this->Flash->error(__('The groupe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
