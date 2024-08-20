<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    #[Route('/')]
    /**
     * @return Response
     */
    public function index(): Response
    {
        return new Response('index');
    }
}