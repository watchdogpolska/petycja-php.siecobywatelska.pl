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

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        $this->loadModel('Posts');
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    /**
     * View method
     *
     * @param string $slug Post slug
     * @return \Cake\Network\Response|void
     */
    public function view($slug)
    {
        $post = $this->Posts->find('slugged', ['slug' => $slug])
                     ->find('visible')
                     ->contain(['Users'])
                     ->firstOrFail();

        if ($post->type == 'link') {
            return $this->redirect($post->link_target);
        }

        $this->set(compact('post'));
    }

    /**
     * rss method
     *
     * @return void
     */
    public function rss()
    {
        $posts = $this->Posts
            ->find('visible')
            ->limit(20)
            ->order(['created' => 'desc']);

        $this->set(compact('posts'));
    }
}
