<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerGender Controller
 *
 * @property \App\Model\Table\PerGenderTable $PerGender
 */
class PerGenderController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $perGender = $this->paginate($this->PerGender);

        $this->set(compact('perGender'));
        $this->set('_serialize', ['perGender']);
    }

    /**
     * View method
     *
     * @param string|null $id Per Gender id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perGender = $this->PerGender->get($id, [
            'contain' => []
        ]);

        $this->set('perGender', $perGender);
        $this->set('_serialize', ['perGender']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perGender = $this->PerGender->newEntity();
        if ($this->request->is('post')) {
            $perGender = $this->PerGender->patchEntity($perGender, $this->request->getData());
            if ($this->PerGender->save($perGender)) {
                $this->Flash->success(__('The per gender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per gender could not be saved. Please, try again.'));
        }
        $this->set(compact('perGender'));
        $this->set('_serialize', ['perGender']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Per Gender id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perGender = $this->PerGender->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perGender = $this->PerGender->patchEntity($perGender, $this->request->getData());
            if ($this->PerGender->save($perGender)) {
                $this->Flash->success(__('The per gender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The per gender could not be saved. Please, try again.'));
        }
        $this->set(compact('perGender'));
        $this->set('_serialize', ['perGender']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Per Gender id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perGender = $this->PerGender->get($id);
        if ($this->PerGender->delete($perGender)) {
            $this->Flash->success(__('The per gender has been deleted.'));
        } else {
            $this->Flash->error(__('The per gender could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
