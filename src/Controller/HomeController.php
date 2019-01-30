<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/xedni", name="xedni")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function xedni()
    {
        return $this->render('home/xedni.html.twig');
    }

    /**
     * @Route("/test2", name="test2")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function test2()
    {
        return $this->render('home/test2.html.twig');
    }

    /**
     * @Route("/test2_1", name="test2_1")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function test2_1()
    {
        return $this->render('home/test2_1.html.twig');
    }
}
