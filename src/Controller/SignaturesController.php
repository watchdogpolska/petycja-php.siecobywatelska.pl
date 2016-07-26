<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Signatures Controller
 *
 * @property \App\Model\Table\SignaturesTable $Signatures
 */
class SignaturesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $signatures = $this->paginate($this->Signatures);

        $this->set(compact('signatures'));
        $this->set('_serialize', ['signatures']);
    }

    /**
     * View method
     *
     * @param string|null $id Signature id.
     * @return void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $signature = $this->Signatures->get($id, [
            'contain' => []
        ]);

        $this->set('signature', $signature);
        $this->set('_serialize', ['signature']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $signature = $this->Signatures->newEntity();
        if ($this->request->is('post')) {
            $signature = $this->Signatures->patchEntity($signature, $this->request->data);
            if ($this->Signatures->save($signature)) {
                $this->Flash->success(__('The signature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The signature could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('signature'));
        $this->set('_serialize', ['signature']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Signature id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $signature = $this->Signatures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $signature = $this->Signatures->patchEntity($signature, $this->request->data);
            if ($this->Signatures->save($signature)) {
                $this->Flash->success(__('The signature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The signature could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('signature'));
        $this->set('_serialize', ['signature']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Signature id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $signature = $this->Signatures->get($id);
        if ($this->Signatures->delete($signature)) {
            $this->Flash->success(__('The signature has been deleted.'));
        } else {
            $this->Flash->error(__('The signature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
