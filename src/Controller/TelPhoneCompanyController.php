<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TelPhoneCompany Controller
 *
 * @property \App\Model\Table\TelPhoneCompanyTable $TelPhoneCompany
 */
class TelPhoneCompanyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $telPhoneCompany = $this->paginate($this->TelPhoneCompany);

        $this->set(compact('telPhoneCompany'));
        $this->set('_serialize', ['telPhoneCompany']);
    }

    /**
     * View method
     *
     * @param string|null $id Tel Phone Company id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telPhoneCompany = $this->TelPhoneCompany->get($id, [
            'contain' => []
        ]);

        $this->set('telPhoneCompany', $telPhoneCompany);
        $this->set('_serialize', ['telPhoneCompany']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telPhoneCompany = $this->TelPhoneCompany->newEntity();
        if ($this->request->is('post')) {
            $telPhoneCompany = $this->TelPhoneCompany->patchEntity($telPhoneCompany, $this->request->getData());
            if ($this->TelPhoneCompany->save($telPhoneCompany)) {
                $this->Flash->success(__('The tel phone company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone company could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneCompany'));
        $this->set('_serialize', ['telPhoneCompany']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tel Phone Company id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telPhoneCompany = $this->TelPhoneCompany->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telPhoneCompany = $this->TelPhoneCompany->patchEntity($telPhoneCompany, $this->request->getData());
            if ($this->TelPhoneCompany->save($telPhoneCompany)) {
                $this->Flash->success(__('The tel phone company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tel phone company could not be saved. Please, try again.'));
        }
        $this->set(compact('telPhoneCompany'));
        $this->set('_serialize', ['telPhoneCompany']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tel Phone Company id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telPhoneCompany = $this->TelPhoneCompany->get($id);
        if ($this->TelPhoneCompany->delete($telPhoneCompany)) {
            $this->Flash->success(__('The tel phone company has been deleted.'));
        } else {
            $this->Flash->error(__('The tel phone company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
