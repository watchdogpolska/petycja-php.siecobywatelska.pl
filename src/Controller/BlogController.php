<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Blog Controller
 *
 * @property \App\Model\Table\BlogTable $Blog
 */
class BlogController extends AppController
{


    public $paginate = [
        'limit' => 25,
        'contain' => ['Users'],
        'order' => [
            'Posts.created' => 'desc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        $this->loadModel('Posts');
    }

    public function index()
    {
        $blog = $this->paginate($this->Posts);

        $this->set(compact('blog'));
        $this->set('_serialize', ['blog']);
    }

    public function post()
    {
        $id = $this->request->params['pass'];

        $post = $this->Posts->find('id',[
            'id' => $id
        ]);

        $this->set([
            'blog' => $post
        ]);
    }
}
