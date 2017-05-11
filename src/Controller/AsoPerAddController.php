<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AsoPerAdd Controller
 *
 * @property \App\Model\Table\AsoPerAddTable $AsoPerAdd
 */
class AsoPerAddController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $asoPerAdd = $this->paginate($this->AsoPerAdd);

        $this->set(compact('asoPerAdd'));
        $this->set('_serialize', ['asoPerAdd']);
    }

    /**
     * View method
     *
     * @param string|null $id Aso Per Add id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asoPerAdd = $this->AsoPerAdd->get($id, [
            'contain' => []
        ]);

        $this->set('asoPerAdd', $asoPerAdd);
        $this->set('_serialize', ['asoPerAdd']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asoPerAdd = $this->AsoPerAdd->newEntity();
        if ($this->request->is('post')) {
            $asoPerAdd = $this->AsoPerAdd->patchEntity($asoPerAdd, $this->request->getData());
            if ($this->AsoPerAdd->save($asoPerAdd)) {
                $this->Flash->success(__('The aso per add has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aso per add could not be saved. Please, try again.'));
        }
        $this->set(compact('asoPerAdd'));
        $this->set('_serialize', ['asoPerAdd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aso Per Add id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asoPerAdd = $this->AsoPerAdd->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asoPerAdd = $this->AsoPerAdd->patchEntity($asoPerAdd, $this->request->getData());
            if ($this->AsoPerAdd->save($asoPerAdd)) {
                $this->Flash->success(__('The aso per add has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aso per add could not be saved. Please, try again.'));
        }
        $this->set(compact('asoPerAdd'));
        $this->set('_serialize', ['asoPerAdd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aso Per Add id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asoPerAdd = $this->AsoPerAdd->get($id);
        if ($this->AsoPerAdd->delete($asoPerAdd)) {
            $this->Flash->success(__('The aso per add has been deleted.'));
        } else {
            $this->Flash->error(__('The aso per add could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
