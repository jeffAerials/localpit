<?php

namespace LocalAssault\AppInitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocalAssaultAppInitBundle:Default:index.html.twig');
    }
}
