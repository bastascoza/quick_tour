<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController
{
    
   /**
    * @Route("/hello/{name}")
    */
   public function index($name): Response
   {
       return new Response("hello $name!");
   }
   /**
    * @Route("/simplicity")
    */
   public function FunctionName(): Response
   {
       return new Response("simple! nice! great!");
   }
}