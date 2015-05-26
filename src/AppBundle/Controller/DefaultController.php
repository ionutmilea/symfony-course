<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    public function devPhpInfoAction() {
        $response = new Response();
        $response->setContent(phpinfo());
        $response->headers->set('Content-Type', 'text/html');
        $response->send();
    }
}
