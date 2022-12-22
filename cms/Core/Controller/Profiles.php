<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Base\Model;
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
    public function index()
    {
         $this->view = 'profiles.index';
        $user = new User; // new model user.
        $this->data['user'] = $user->get_by_id($_GET['id']);
      
    }
  
}

