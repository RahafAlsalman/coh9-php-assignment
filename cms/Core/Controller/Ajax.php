<?php
namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Tests;

class Ajax extends Controller
{
    use  Tests;

    public function render()
    {
            if (!empty($this->view))
                    $this->view();
    }

public function test_ajax()
{
    {
        $this->view = "ajax";
    }
}
}
