<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerCondition Controller
 *
 * @property \App\Model\Table\PerConditionTable $PerCondition
 */
class PerConditionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $perCondition = $this->paginate($this->PerCondition);

        $this->set(compact('perCondition'));
        $this->set('_serialize', ['perCondition']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Condition id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perCondition = $this->PerCondition->get($id, [
            'contain' => []
        ]);

        $this->set('perCondition', $perCondition);
        $this->set('_serialize', ['perCondition']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perCondition = $this->PerCondition->newEntity();
        if ($this->request->is('post')) {
            $perCondition = $this->PerCondition->patchEntity($perCondition, $this->request->getData());
            if ($this->PerCondition->save($perCondition)) {
                $this->Flash->success(__('The per condition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per condition could not be saved. Please, try again.'));
        }
        $this->set(compact('perCondition'));
        $this->set('_serialize', ['perCondition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Condition id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perCondition = $this->PerCondition->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perCondition = $this->PerCondition->patchEntity($perCondition, $this->request->getData());
            if ($this->PerCondition->save($perCondition)) {
                $this->Flash->success(__('The per condition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per condition could not be saved. Please, try again.'));
        }
        $this->set(compact('perCondition'));
        $this->set('_serialize', ['perCondition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Condition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perCondition = $this->PerCondition->get($id);
        if ($this->PerCondition->delete($perCondition)) {
            $this->Flash->success(__('The per condition has been deleted.'));
        } else {
            $this->Flash->error(__('The per condition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
