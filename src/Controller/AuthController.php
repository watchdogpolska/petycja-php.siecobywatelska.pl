<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Auth Controller
 *
 */
class AuthController extends AppController
{
    public $Auth = false;

    /**
     * {@inheritdoc}
     *
     * @param \Cake\Event\Event $event {@inheritdoc}
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['login']);
    }

    /**
     * Login method
     *
     * @return \Cake\Network\Response|void
     */
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    /**
     * Logout method
     *
     * @return \Cake\Network\Response|null
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
