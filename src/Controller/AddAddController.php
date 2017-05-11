<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AddAdd Controller
 *
 * @property \App\Model\Table\AddAddTable $AddAdd
 */
class AddAddController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $addAdd = $this->paginate($this->AddAdd);

        $this->set(compact('addAdd'));
        $this->set('_serialize', ['addAdd']);
    }

    /**
     * View method
     *
     * @param string|null $id Add Add id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addAdd = $this->AddAdd->get($id, [
            'contain' => []
        ]);

        $this->set('addAdd', $addAdd);
        $this->set('_serialize', ['addAdd']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addAdd = $this->AddAdd->newEntity();
        if ($this->request->is('post')) {
            $addAdd = $this->AddAdd->patchEntity($addAdd, $this->request->getData());
            if ($this->AddAdd->save($addAdd)) {
                $this->Flash->success(__('The add add has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add add could not be saved. Please, try again.'));
        }
        $this->set(compact('addAdd'));
        $this->set('_serialize', ['addAdd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Add Add id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addAdd = $this->AddAdd->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addAdd = $this->AddAdd->patchEntity($addAdd, $this->request->getData());
            if ($this->AddAdd->save($addAdd)) {
                $this->Flash->success(__('The add add has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The add add could not be saved. Please, try again.'));
        }
        $this->set(compact('addAdd'));
        $this->set('_serialize', ['addAdd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Add Add id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addAdd = $this->AddAdd->get($id);
        if ($this->AddAdd->delete($addAdd)) {
            $this->Flash->success(__('The add add has been deleted.'));
        } else {
            $this->Flash->error(__('The add add could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
