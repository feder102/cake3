<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerMaritalStatus Controller
 *
 * @property \App\Model\Table\PerMaritalStatusTable $PerMaritalStatus
 */
class PerMaritalStatusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $perMaritalStatus = $this->paginate($this->PerMaritalStatus);

        $this->set(compact('perMaritalStatus'));
        $this->set('_serialize', ['perMaritalStatus']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Marital Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perMaritalStatus = $this->PerMaritalStatus->get($id, [
            'contain' => []
        ]);

        $this->set('perMaritalStatus', $perMaritalStatus);
        $this->set('_serialize', ['perMaritalStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perMaritalStatus = $this->PerMaritalStatus->newEntity();
        if ($this->request->is('post')) {
            $perMaritalStatus = $this->PerMaritalStatus->patchEntity($perMaritalStatus, $this->request->getData());
            if ($this->PerMaritalStatus->save($perMaritalStatus)) {
                $this->Flash->success(__('The per marital status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per marital status could not be saved. Please, try again.'));
        }
        $this->set(compact('perMaritalStatus'));
        $this->set('_serialize', ['perMaritalStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Marital Status id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perMaritalStatus = $this->PerMaritalStatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perMaritalStatus = $this->PerMaritalStatus->patchEntity($perMaritalStatus, $this->request->getData());
            if ($this->PerMaritalStatus->save($perMaritalStatus)) {
                $this->Flash->success(__('The per marital status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per marital status could not be saved. Please, try again.'));
        }
        $this->set(compact('perMaritalStatus'));
        $this->set('_serialize', ['perMaritalStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Marital Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perMaritalStatus = $this->PerMaritalStatus->get($id);
        if ($this->PerMaritalStatus->delete($perMaritalStatus)) {
            $this->Flash->success(__('The per marital status has been deleted.'));
        } else {
            $this->Flash->error(__('The per marital status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
