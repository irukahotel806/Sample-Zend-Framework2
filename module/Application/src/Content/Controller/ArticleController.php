<?php

namespace Content\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ArticleController extends AbstractActionController
{
    public function viewAction()
    {

        //  ���C���ƂȂ�r���[���f�����쐬
        $view = new ViewModel();

        // �e���v���[�g��ݒ�
        $view->setTemplate('content/article/view');

        //  �T�u�ƂȂ�r���[���f�����쐬
        $articleView = new ViewModel(array('article' => $article));
        $articleView->setTemplate('content/article');

        //  �T�u�ƂȂ�r���[���f�����쐬
        $primarySidebarView = new ViewModel();
        $primarySidebarView->setTemplate('content/main-sidebar');

        //  �T�u�ƂȂ�r���[���f�����쐬
        $secondarySidebarView = new ViewModel();
        $secondarySidebarView->setTemplate('content/secondary-sidebar');

        // ���C���ƂȂ�r���[�Ɏq�̃r���[��ǉ����Ă���
        $view->addChild($articleView, 'article')
             ->addChild($primarySidebarView, 'sidebar_primary')
             ->addChild($secondarySidebarView, 'sidebar_secondary');

        return $view;
    }
}

