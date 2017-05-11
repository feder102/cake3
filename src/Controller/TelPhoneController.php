<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TelPhone Controller
 *
 * @property \App\Model\Table\TelPhoneTable $TelPhone
 */
class TelPhoneController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $telPhone = $this->paginate($this->TelPhone);

        $this->set(compact('telPhone'));
        $this->set('_serialize', ['telPhone']);
    }

    /**
     * View method
     *
     * @param string|null $id Tel Phone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telPhone = $this->TelPhone->get($id, [
            'contain' => []
        ]);

        $this->set('telPhone', $telPhone);
        $this->set('_serialize', ['telPhone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telPhone = $this->TelPhone->newEntity();
        if ($this->request->is('post')) {
            $telPhone = $this->TelPhone->patchEntity($telPhone, $this->request->getData());
            if ($this->TelPhone->save($telPhone)) {
                $this->Flash->success(__('The tel phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhone'));
        $this->set('_serialize', ['telPhone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tel Phone id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telPhone = $this->TelPhone->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telPhone = $this->TelPhone->patchEntity($telPhone, $this->request->getData());
            if ($this->TelPhone->save($telPhone)) {
                $this->Flash->success(__('The tel phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhone'));
        $this->set('_serialize', ['telPhone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tel Phone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telPhone = $this->TelPhone->get($id);
        if ($this->TelPhone->delete($telPhone)) {
            $this->Flash->success(__('The tel phone has been deleted.'));
        } else {
            $this->Flash->error(__('The tel phone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
