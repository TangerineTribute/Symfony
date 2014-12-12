<?php

namespace Joli\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JoliBlogBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction()
    {
    	$homeService = $this->container->get('home_service');
    	
    	$posts = $homeService->getPosts();

    	if ($posts === false)
    	{
    		$error = 'Aucun post trouvé !';

    		return $this->render('JoliBlogBundle:Default:index.html.twig', array('error' => $error));
    	}

    	return $this->render('JoliBlogBundle:Default:index.html.twig', array('posts' => $posts));
    }
}
