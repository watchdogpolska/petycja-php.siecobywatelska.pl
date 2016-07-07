<?php
namespace App\Controller;

use Cake\Event\Event;

use App\Controller\AppController;

/**
 * Auth Controller
 *
 */
class AuthController extends AppController
{
    var $Auth = false;

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['login']);
    }
    /**
     * Login method
     *
     * @return \Cake\Network\Response|null
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
     * Login method
     *
     * @return \Cake\Network\Response|null
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}
