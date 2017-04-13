<?php

namespace SMS\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SMSBlogBundle:Default:index.html.twig');
    }
}
