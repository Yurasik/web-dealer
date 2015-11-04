<?php

namespace WebDealerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebDealerBundle:Main:main.html.twig');
    }

    public function error404Action()
    {
        return $this->render('WebDealerBundle:Main:error404.html.twig');
    }
}