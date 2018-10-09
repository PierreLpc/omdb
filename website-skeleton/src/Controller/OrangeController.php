<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrangeController extends AbstractController
{
    /**
     * @Route("/query", name="query")
     */
    public function query()
    {
        $apiKey = 'bb09d609';
        $movies = "Avengers";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s=' . $movies . '&apikey=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);

        $json = json_decode($resultat_curl);


        return $this->render('orange/index.html.twig',
            array(
                'query' => $movies,
                'movies' => $json->Search,
            )

        );
    }


    /**
     * @Route("/film/{movies}", name="film"
     * )
     */
    public function film($movies)
    {
        $apiKey = 'bb09d609';
        //$movies = "Avengers";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s=' . $movies . '&apikey=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);

        $json = json_decode($resultat_curl);


        return $this->render('orange/index.html.twig',
            array(
                'query' => $movies,
                'movies' => $json->Search,
            )

        );
    }
}




