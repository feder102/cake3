<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AddAddType Controller
 *
 * @property \App\Model\Table\AddAddTypeTable $AddAddType
 */
class AddAddTypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $addAddType = $this->paginate($this->AddAddType);

        $this->set(compact('addAddType'));
        $this->set('_serialize', ['addAddType']);
    }

    /**
     * View method
     *
     * @param string|null $id Add Add Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addAddType = $this->AddAddType->get($id, [
            'contain' => []
        ]);

        $this->set('addAddType', $addAddType);
        $this->set('_serialize', ['addAddType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addAddType = $this->AddAddType->newEntity();
        if ($this->request->is('post')) {
            $addAddType = $this->AddAddType->patchEntity($addAddType, $this->request->getData());
            if ($this->AddAddType->save($addAddType)) {
                $this->Flash->success(__('The add add type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add add type could not be saved. Please, try again.'));
        }
        $this->set(compact('addAddType'));
        $this->set('_serialize', ['addAddType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Add Add Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addAddType = $this->AddAddType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addAddType = $this->AddAddType->patchEntity($addAddType, $this->request->getData());
            if ($this->AddAddType->save($addAddType)) {
                $this->Flash->success(__('The add add type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add add type could not be saved. Please, try again.'));
        }
        $this->set(compact('addAddType'));
        $this->set('_serialize', ['addAddType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Add Add Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addAddType = $this->AddAddType->get($id);
        if ($this->AddAddType->delete($addAddType)) {
            $this->Flash->success(__('The add add type has been deleted.'));
        } else {
            $this->Flash->error(__('The add add type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
