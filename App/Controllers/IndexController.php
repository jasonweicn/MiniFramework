<?php
class IndexController extends Action
{
    function init()
    {
        $this->view->title = 'Mini Framework';
    }
    
    function indexAction()
    {
        Loader::loadClass('Info');
        $info = new Info();
        $info = $info->getInfo();
        $this->view->assign('info', $info);
        $this->view->display();
    }
}