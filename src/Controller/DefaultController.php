<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\GreetingGenerator;
//use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("api/hello/{name}")
     */
    public function apiExample($name): Response
    {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
        ]);
    }
   /**
    * @Route("/hello/{name}")
    */
   public function index($name,GreetingGenerator $generator): Response
   {
      // return new Response("hello $name!");
      $greeting = $generator->getRandomGreeting();
     // $Logger->info("saying $greeting to my $name!");
       return $this->render('default/index.html.twig', [
        'name' => $name,
        'greeting'=>$greeting
    ]);
   }
   
   /**
    * @Route("/simplicity")
    */
   public function simple(): Response
   {
       return new Response("simple! nice! great!");
   }
}