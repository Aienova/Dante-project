<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class TaskController extends AbstractController{

    public function task(): Response {

        return $this->render("task/index.html.twig",["controller_name" => "TaskController",]);
        
    }
    
}   

?>