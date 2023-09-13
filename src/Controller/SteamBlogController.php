<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SteamBlogController extends AbstractController
{
    /**
     * @Route("/", name="steam4_dev")
     */
    public function index()
    {
        return $this->render('steam4_dev/index.html.twig');
    }

    /**
     * @Route("/", name="Blog)
     */
    public function Create()
    {

    }

        /**
     * @Route("/", name="Blog)
     * Param : id Blog
     */
    public function Edit()
    {
        
    }

    /**
     * @Route("/", name="Blog)
     * Param : id_Blog
     */
    public function Delete()
    {
        
    }

    /**
     * @Route("/", name="Blog)
     */
    public function Consult()
    {
        
    }

    /**
     * @Route("/", name="Blog)
     */
    public function ViewDetail()
    {
        
    }

       /**
     * @Route("/", name="Blog)
     * Params : id_blog, txt_comment
     */
    public function AddComment()
    {
        
    } 
}
