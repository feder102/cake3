<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoCountry Controller
 *
 * @property \App\Model\Table\GeoCountryTable $GeoCountry
 */
class GeoCountryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $geoCountry = $this->paginate($this->GeoCountry);

        $this->set(compact('geoCountry'));
        $this->set('_serialize', ['geoCountry']);
    }

    /**
     * View method
     *
     * @param string|null $id Geo Country id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geoCountry = $this->GeoCountry->get($id, [
            'contain' => []
        ]);

        $this->set('geoCountry', $geoCountry);
        $this->set('_serialize', ['geoCountry']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geoCountry = $this->GeoCountry->newEntity();
        if ($this->request->is('post')) {
            $geoCountry = $this->GeoCountry->patchEntity($geoCountry, $this->request->getData());
            if ($this->GeoCountry->save($geoCountry)) {
                $this->Flash->success(__('The geo country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geo country could not be saved. Please, try again.'));
        }
        $this->set(compact('geoCountry'));
        $this->set('_serialize', ['geoCountry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Geo Country id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geoCountry = $this->GeoCountry->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geoCountry = $this->GeoCountry->patchEntity($geoCountry, $this->request->getData());
            if ($this->GeoCountry->save($geoCountry)) {
                $this->Flash->success(__('The geo country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geo country could not be saved. Please, try again.'));
        }
        $this->set(compact('geoCountry'));
        $this->set('_serialize', ['geoCountry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Geo Country id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geoCountry = $this->GeoCountry->get($id);
        if ($this->GeoCountry->delete($geoCountry)) {
            $this->Flash->success(__('The geo country has been deleted.'));
        } else {
            $this->Flash->error(__('The geo country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
