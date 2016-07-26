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
        'finder' => 'visible',
        'contain' => ['Users'],
        'order' => [
            'Posts.state' => 'asc',
            'Posts.created' => 'desc',
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
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    public function view()
    {
        $slug = $this->request->params['slug'];

        $post = $this->Posts->find('slugged', ['slug' => $slug])
                     ->find('visible')
                     ->contain(['Users'])
                     ->firstOrFail();

        if ($post->type == 'link') {
            return $this->redirect($post->link_target);
        }

        $this->set(compact('post'));
    }
}
