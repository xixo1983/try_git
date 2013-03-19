<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nirmal
 * Date: 17/3/13
 * Time: 11:45 PM
 * To change this template use File | Settings | File Templates.
 *
 * @property Post $Post
 *
 */

//App::uses("")

class PostsController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index()
    {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }


}