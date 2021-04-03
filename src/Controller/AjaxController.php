<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Entity\Facts;
use Doctrine\ORM\EntityManagerInterface;
 
class AjaxController extends AbstractController {

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/factjson", name="factjson")
     */
    
    public function index()
    {

        $data = [ "error"=> "null ||  string", "data"=> ["fact" => "string", "auteur"=>"string","date"=>"timestamp"]];
        $datajson = json_encode($data);

        return $this->render('ajax/index.html.twig', [ "data" => $data]);
    }

    /**
     * @Route("/factjson/all", name="factjson_all")
     */
    
    public function jsonActionAll()
    {
        $facts = $this->entityManager->getRepository(Facts::class)->findAll();
        $datas = array();
        $erreur = null;

        if (count($facts) == 0) {
            $erreur = "aucune donnée à afficher";
        }


        foreach($facts as $key => $fact) {
            $datas[$key]['fact']= $fact->getFact();
            $datas[$key]['auteur']= $fact->getAuteur();
            $date = $fact->getDate();
            $dateFormat = $date->getTimestamp();
            $datas[$key]['date']= $dateFormat;
        	$datas[$key]['img'] = $fact->getImg();
        }
        $reponse = [ "error" => $erreur, "data" => $datas ];

        /**
         * Ton tableau avec toutes les données
         */
 
        return new JsonResponse($reponse );
    }

    /**
     * @Route("/factjson/random", name="factjson_random")
     */
    
    public function jsonActionOne()
    {
        $facts = $this->entityManager->getRepository(Facts::class)->findAll();
    	$count = count($facts);
        $random = rand(1, $count);
        
        $fact = $this->entityManager->getRepository(Facts::class)->findOneBy([
            'id' => $random
        ]);

        $erreur = null;

        if ($fact == null) {
            $erreur = "aucune donnée à afficher";
        }

        $data = ['fact'=> $fact->getFact(),  'date'=> $fact->getDate()->getTimestamp(), 'auteur'=>$fact->getAuteur(), 'img'=> $fact->getImg()];

        $reponse = [ "error" => $erreur, "data" => $data ];
    
        
        /**
         * Ton tableau avec toutes les données
         */
 
        return new JsonResponse($reponse);
    }

    /**
     * @Route("/factjson/auteurs/{auteur}", name="factjson_auteur")
     */
    
    public function jsonActionAuteur(string $auteur)
    {
        $facts = $this->entityManager->getRepository(Facts::class)->findByAuteur($auteur);
        $datas = array();

        $erreur = null;

        if (count($facts) == 0) {
            $erreur = "aucune donnée à afficher";
        }

        foreach($facts as $key => $fact) {
            $datas[$key]['fact']= $fact->getFact();
            $datas[$key]['auteur']= $fact->getAuteur();
            $date = $fact->getDate();
            $dateFormat = $date->getTimestamp();
            $datas[$key]['date']= $dateFormat;
        	$datas[$key]['img'] = $fact->getImg();
        }

        $reponse = [ "error" => $erreur, "data" => $datas ];

        
        /**
         * Ton tableau avec toutes les données
         */
 
        return new JsonResponse($reponse);
    }

    /**
     * @Route("/factjson/list", name="factjson_list")
     */
    
    public function jsonActionList()
    {
        $facts = $this->entityManager->getRepository(Facts::class)->findAll();
        
        $auteurs = array();


        $erreur = null;

        if (count($facts) == 0) {
            $erreur = "aucune donnée à afficher";
        }

        foreach($facts as $key => $fact) {
    
            if (!in_array($fact->getAuteur(), $auteurs)) {
                $auteurs[] = $fact->getAuteur() ;
            }
                  
        }

        $reponse = [ "error" => $erreur, "data" => $auteurs ];
        
       
        /**
         * Ton tableau avec toutes les données
         */
 
        return new JsonResponse($reponse);
    }
}