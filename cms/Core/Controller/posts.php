<?php
namespace Core\Controller;
use Core\Model\Post;
use Core\Base\Controller;
use Core\Helpers\Helper;

class Posts extends Controller
{
    public function render()//render is constant but methoud change//just to view 
    {
        if (!empty($this->view))
        $this->view();
    }

    public function index()
    {
        
        $this->view = 'posts.index';
        $post = new Post; // new model post.
        $this->data['posts'] = $post->get_all();
        var_dump($this->data['posts'] );
        $this->data['posts_count'] = count($post->get_all());
    }
    
    public function single()
    {
        $this->view = 'posts.single';
        $post = new Post();
        $this->data['post'] = $post->get_by_id($_GET['id']);
    }
    
      /**
     * Display the HTML form for post creation
     *
     * @return void
     */
    public function create()
    {
       // $this->permissions(['post:create']);
        $this->view = 'posts.create';
    }

    /**
     * Creates new post
     *
     * @return void
     */
    public function store()
    {
      //  $this->permissions(['post:create']);
        $post = new Post();
        $post->create($_POST);
       Helper::redirect('/posts');
    }

    /**
     * Display the HTML form for post update
     *
     * @return void
     */
    public function edit()
    {
        //$this->permissions(['post:read', 'post:update']);
        $this->view = 'posts.edit';
        $post = new Post();
        $this->data['post'] = $post->get_by_id($_GET['id']);
    }

    /**
     * Updates the post
     *
     * @return void
     */
    public function update()
    {
       // $this->permissions(['post:read', 'post:update']);
        $post = new Post();
        $post->update($_POST);
        Helper::redirect('/post?id=' . $_POST['id']);
    }

    /**
     * Delete the post
     *
     * @return void
     */
    public function delete()
    {
        //$this->permissions(['post:read', 'post:delete']);
        $post = new Post();
        $post->delete($_GET['id']);
        Helper::redirect('/posts');
    }
}
