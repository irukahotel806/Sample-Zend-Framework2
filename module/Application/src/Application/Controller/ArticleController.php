<?php

namespace Content\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ArticleController extends AbstractActionController
{
    public function viewAction()
    {

        //  メインとなるビューモデルを作成
        $view = new ViewModel();

        // テンプレートを設定
        $view->setTemplate('content/article/view');

        //  サブとなるビューモデルを作成
        $articleView = new ViewModel(array('article' => $article));
        $articleView->setTemplate('content/article');

        //  サブとなるビューモデルを作成
        $primarySidebarView = new ViewModel();
        $primarySidebarView->setTemplate('content/main-sidebar');

        //  サブとなるビューモデルを作成
        $secondarySidebarView = new ViewModel();
        $secondarySidebarView->setTemplate('content/secondary-sidebar');

        // メインとなるビューに子のビューを追加していく
        $view->addChild($articleView, 'article')
             ->addChild($primarySidebarView, 'sidebar_primary')
             ->addChild($secondarySidebarView, 'sidebar_secondary');

        return $view;
    }
}

