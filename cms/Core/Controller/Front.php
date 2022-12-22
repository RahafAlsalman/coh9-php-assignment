<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Model\Item;
use Core\Model\Tag;
use Core\Model\User;
use DateTime;

class Front extends Controller
{
    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }


    /**
     * List all news
     *
     * @return void
     */
    // public function index()
    // {
    //     $this->view ='home';
    //     $item= new Item();
    //     $this->data['items'] = $item->get_all();
    // }
   

    public function single()
    {
        $this->view = 'single';
        $item = new Item();
        
        $selected_item = $item->get_by_id($_GET['id']); // get the post data (including the user_id)
        $user = new User(); // get the user model to get the author info
        $author = $user->get_by_id($selected_item->user_id); // get the author by using the user_id in the $selected_post
        $selected_item->author = !empty($author) ? $author->display_name : null; // check if we got a user withe the provided user_id

        $date = new \DateTime($selected_item->created_at);
        $selected_item->created_at = $date->format('d/m/Y');

        // get tags related to the current post
        $tag = new Tag();
      //  get related tags (Should be implemented in the Tag Model)
       $sql = "SELECT * FROM posts_tags WHERE post_id={$_GET['id']}";
       $tags_query = $tag->connection->query($sql); // get data from mysql
       $item_tags_relations = array(); // create container (Array) for the relations
       if ($tags_query->num_rows > 0) { // fill out the relations container
           while ($row = $tags_query->fetch_object()) {
               $item_tags_relations[] = $row;
           }
       }
    }

    
}