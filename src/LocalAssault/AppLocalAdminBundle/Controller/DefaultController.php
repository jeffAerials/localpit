<?php

namespace LocalAssault\AppLocalAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocalAssaultAppLocalAdminBundle:Default:index.html.twig');
    }
}
