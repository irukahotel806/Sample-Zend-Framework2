<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function addAction()
    {
        // ビューへ渡す値を配列にて定義
        $values = array(
            'key1' => 'value1',
            'key2' => 'value2',
        );
        $view = new ViewModel($values);
        
        // 使用するレイアウトを指定
        $this->layout('layout/layout.phtml');
        
        // 使用するビューを指定
        $view->setTemplate('/application/index/index.phtml');
        
        return $view;
    }
}
