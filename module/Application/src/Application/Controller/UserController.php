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
        return new ViewModel($values);
    }
}
