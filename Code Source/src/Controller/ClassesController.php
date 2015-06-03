<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Classes Controller
 *
 * @property \App\Model\Table\ClassesTable $Classes
 */
class ClassesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('classes', $this->paginate($this->Classes));
        $this->set('_serialize', ['classes']);
    }

    /**
     * View method
     *
     * @param string|null $id Class id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $class = $this->Classes->get($id, [
            'contain' => []
        ]);
        $this->set('class', $class);
        $this->set('_serialize', ['class']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $class = $this->Classes->newEntity();
        if ($this->request->is('post')) {
            $class = $this->Classes->patchEntity($class, $this->request->data);
            if ($this->Classes->save($class)) {
                $this->Flash->success(__('The class has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The class could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('class'));
        $this->set('_serialize', ['class']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Class id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $class = $this->Classes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $class = $this->Classes->patchEntity($class, $this->request->data);
            if ($this->Classes->save($class)) {
                $this->Flash->success(__('The class has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The class could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('class'));
        $this->set('_serialize', ['class']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Class id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $class = $this->Classes->get($id);
        if ($this->Classes->delete($class)) {
            $this->Flash->success(__('The class has been deleted.'));
        } else {
            $this->Flash->error(__('The class could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
