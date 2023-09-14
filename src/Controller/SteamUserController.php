<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SteamUserController extends AbstractController
{
    /**
     * @Route("/", name="steam4_dev")
     */
    public function User()
    {
        return $this->render('steam4_dev/index.html.twig');
    }

    /**
     * @Route("/", name="Blog)
     */
    public function CreateUser()
    {

    }

        /**
     * @Route("/", name="Blog)
     * Param : id Blog
     */
    public function DeleteUser()
    {
        
    }

    /**
     * @Route("/", name="Blog)
     * Param : id_Blog
     */
    public function GetUser()
    {
        
    }

    /**
    *
    * View all user
    */
    public function ViewAllUser()
    {

    }

}
