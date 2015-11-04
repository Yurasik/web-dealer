<?php

namespace WebDealerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
	public function portfolioAction()
	{
//      $portfolio_model = $this->loadModel('Portfolio');
//		$data['portfolio'] = $portfolio_model->getData();
        return $this->render('WebDealerBundle:Portfolio:portfolio.html.twig');
	}
}
