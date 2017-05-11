<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TelPhoneType Controller
 *
 * @property \App\Model\Table\TelPhoneTypeTable $TelPhoneType
 */
class TelPhoneTypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $telPhoneType = $this->paginate($this->TelPhoneType);

        $this->set(compact('telPhoneType'));
        $this->set('_serialize', ['telPhoneType']);
    }

    /**
     * View method
     *
     * @param string|null $id Tel Phone Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telPhoneType = $this->TelPhoneType->get($id, [
            'contain' => []
        ]);

        $this->set('telPhoneType', $telPhoneType);
        $this->set('_serialize', ['telPhoneType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telPhoneType = $this->TelPhoneType->newEntity();
        if ($this->request->is('post')) {
            $telPhoneType = $this->TelPhoneType->patchEntity($telPhoneType, $this->request->getData());
            if ($this->TelPhoneType->save($telPhoneType)) {
                $this->Flash->success(__('The tel phone type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone type could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneType'));
        $this->set('_serialize', ['telPhoneType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tel Phone Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telPhoneType = $this->TelPhoneType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telPhoneType = $this->TelPhoneType->patchEntity($telPhoneType, $this->request->getData());
            if ($this->TelPhoneType->save($telPhoneType)) {
                $this->Flash->success(__('The tel phone type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone type could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneType'));
        $this->set('_serialize', ['telPhoneType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tel Phone Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telPhoneType = $this->TelPhoneType->get($id);
        if ($this->TelPhoneType->delete($telPhoneType)) {
            $this->Flash->success(__('The tel phone type has been deleted.'));
        } else {
            $this->Flash->error(__('The tel phone type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
