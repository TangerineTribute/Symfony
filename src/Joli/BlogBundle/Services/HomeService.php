<?php

namespace Joli\BlogBundle\Services;

class HomeService
{
	protected $em;

	public function __construct($em)
	{
		$this->em = $em;
	}

	public function getPosts()
	{
		$posts = $this->em->getRepository('JoliBlogBundle:Post')->findAll();

		if (!$posts)
		{
			return false;
		}

		return $posts;
	}
}