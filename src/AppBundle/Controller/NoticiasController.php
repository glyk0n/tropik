<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NoticiasController extends Controller
{
    /**
     * @Route("/noticias", name="noticias")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('noticias/index.html.twig');
    }


}
