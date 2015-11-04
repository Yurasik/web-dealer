<?php

namespace WebDealerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServicesController extends Controller
{

	function servicesAction()
	{
		return $this->render('WebDealerBundle:Services:services.html.twig');
	}
}
