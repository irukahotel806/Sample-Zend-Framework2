<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function addAction()
    {
        // �r���[�֓n���l��z��ɂĒ�`
        $values = array(
            'key1' => 'value1',
            'key2' => 'value2',
        );
        $view = new ViewModel($values);
        
        // �g�p���郌�C�A�E�g���w��
        $this->layout('layout/layout.phtml');
        
        // �g�p����r���[���w��
        $view->setTemplate('/application/index/index.phtml');
        
        return $view;
    }
}
