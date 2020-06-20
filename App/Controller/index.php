<?php
class Index
{
    public $view;

    function indexAction()
    {
          $this->view->var = 123;
//        include "../modelUser.php";
//        $user = new modelUser();
//        $user->setName('Dima');
    }
    public function mainAction()
    {
          echo 'main';
    }
    function userProfileAction()
    {
        include "../modelUser.php";
        $user = new modelUser();
        $user->load($_GET['id']);
        $this->view->user = $user;
    }

}





