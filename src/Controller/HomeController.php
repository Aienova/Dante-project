<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;



class HomeController extends AbstractController{


    public function home(): Response {

        return $this->render("homepage/index.html.twig",["controller_name" => "HomeController",]);

        
    }
    
}   

?>