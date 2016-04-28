<?php
/**
 * Created by PhpStorm.
 * User: maxidela
 * Date: 13/04/16
 * Time: 17:27
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}