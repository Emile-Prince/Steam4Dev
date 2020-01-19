<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Steam4DevController extends AbstractController
{
    /**
     * @Route("/", name="steam4_dev")
     */
    public function index()
    {
        return $this->render('steam4_dev/index.html.twig');
    }

    /**
     * @Route("about", name="about")
     */
    public function about()
    {
        return $this->render('steam4_dev/about.html.twig');
    }

    /**
     * @Route("team",name="team")
     */
    public function team(){
        return $this->render('steam4_dev/team.html.twig');
    }

    /**
     * @Route("service",name="service")
     */
    public function service(){
        return $this->render('steam4_dev/service.html.twig');
    }
}
