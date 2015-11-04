<?php

namespace WebDealerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
	function contactAction()
	{
        return $this->render('WebDealerBundle:Contact:contact.html.twig');
	}
}
