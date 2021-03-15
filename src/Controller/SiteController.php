<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
	/**
	 * @Route("/", name="page_home")
	 */
	public function homeAction() {
		$parameters = array();
		try {

		}
		finally {
			return $this->render('pages/home.html.twig', $parameters);
		}
	}
}
