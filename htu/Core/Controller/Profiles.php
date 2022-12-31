<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Helpers\Tests;
use Core\Model\item;
use Core\Model\Tag;
use Core\Model\User;

class Profiles extends Controller
{

    use Tests;

    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }

    function __construct()
    {
        $this->auth();
      $this->admin_view(true);
    }


    public function index()
    {
       $this->permissions(['item:read']);
        $this->view = 'profiles.index';
        $user = new User;
        $this->data['user'] = $user->get_by_id($_GET['id']);
    }
    public function editphoto()
    {
        {
            $this->permissions(['item:create']);
           // this is the id of the current logged in user. Because the post creator would be the same logged in user.
    
          
            Helper::redirect('/profiles.upload');
        }
    
    }
}