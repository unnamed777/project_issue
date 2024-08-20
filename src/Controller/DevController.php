<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DevController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    #[Route('/dev/tmp')]
    public function tmp(
        //\App\Action\CheckEmail $action,
    ) {
        return new Response('');
    }

}