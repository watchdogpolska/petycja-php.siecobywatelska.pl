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

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        $this->loadModel('Signatures');
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->listSignature();
        $this->add();
    }

    /**
     * List of signatures method
     *
     * @return void
     */
    public function listSignature()
    {
        $signatures = $this->paginate($this->Signatures);

        $this->set(compact('signatures'));
        $this->set('_serialize', ['signatures']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void
     */
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
     * Thank you method
     *
     * @return void
     */
    public function thank()
    {
    }

    /**
     * Map points method
     *
     * @return void
     */
    public function mapPoints()
    {
        $this->RequestHandler->renderAs($this, 'json');

        $points = $this->Signatures->find('geocoded')->select(['geo_lat', 'geo_lng']);

        $this->set(compact('points'));
        $this->set('_serialize', ['points']);
    }
}
