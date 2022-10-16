<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrackingController extends AbstractController
{
    /**
     * @Route("/", name="tracking")
     */
    public function index(): Response
    {
        $res = json_decode( file_get_contents("https://apidemo.trackingpremium.us/publicapi/v1/search_username?username=trackingpremium"));
        
        return $this->render('tracking/index.html.twig', [
            'listado' => ($res->error->messages == "ok") ? $res->maincompanies : [],
        ]);
    }
}
