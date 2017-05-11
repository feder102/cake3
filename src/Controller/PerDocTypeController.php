<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerDocType Controller
 *
 * @property \App\Model\Table\PerDocTypeTable $PerDocType
 */
class PerDocTypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $perDocType = $this->paginate($this->PerDocType);

        $this->set(compact('perDocType'));
        $this->set('_serialize', ['perDocType']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Doc Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perDocType = $this->PerDocType->get($id, [
            'contain' => []
        ]);

        $this->set('perDocType', $perDocType);
        $this->set('_serialize', ['perDocType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perDocType = $this->PerDocType->newEntity();
        if ($this->request->is('post')) {
            $perDocType = $this->PerDocType->patchEntity($perDocType, $this->request->getData());
            if ($this->PerDocType->save($perDocType)) {
                $this->Flash->success(__('The per doc type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per doc type could not be saved. Please, try again.'));
        }
        $this->set(compact('perDocType'));
        $this->set('_serialize', ['perDocType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Doc Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perDocType = $this->PerDocType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perDocType = $this->PerDocType->patchEntity($perDocType, $this->request->getData());
            if ($this->PerDocType->save($perDocType)) {
                $this->Flash->success(__('The per doc type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per doc type could not be saved. Please, try again.'));
        }
        $this->set(compact('perDocType'));
        $this->set('_serialize', ['perDocType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Doc Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perDocType = $this->PerDocType->get($id);
        if ($this->PerDocType->delete($perDocType)) {
            $this->Flash->success(__('The per doc type has been deleted.'));
        } else {
            $this->Flash->error(__('The per doc type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
