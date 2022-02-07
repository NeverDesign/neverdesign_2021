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

	/**
	 * @Route("/case-studies", name="page_case-studies")
	 */
	public function caseStudiesAction() {
		$parameters = array();
		try {
			$template = 'pages/case-studies.html.twig';
		}
		finally {
			return $this->render($template, $parameters);
		}
	}
}
