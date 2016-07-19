<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Petition Controller
 *
 * @property \App\Model\Table\PetitionTable $Petition
 */
class PetitionController extends AppController
{

    public $paginate = [
        'limit' => 25,
        'order' => [
            'Signatures.created' => 'desc',
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        $this->loadModel('Signatures');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->listSignature();
        $this->add();
    }

    public function listSignature(){
        $signatures = $this->paginate($this->Signatures);

        $this->set(compact('signatures'));
        $this->set('_serialize', ['signatures']);
    }

    public function add()
    {
        $signature = $this->Signatures->newEntity();
        if ($this->request->is('post')) {
            $petition = $this->Signatures->patchEntity($signature, $this->request->data);
            if ($this->Signatures->save($signature)) {
                $this->Flash->success(__('The signature has been saved.'));
                return $this->redirect(['action' => 'thank']);
            } else {
                $this->Flash->error(__('The signature could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('signature'));
        $this->set('_serialize', ['signature']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function thank()
    {

    }


}
