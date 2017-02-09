<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Joueur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of PlayersController
 *
 * @author alexandre-brunet
 */
class PlayersController extends Controller {
    
    /**
     * @Route("/players/add", name="addPlayers")
     * @Method({"POST"})
     * @param Request $r
     */
    public function addPlayers(Request $r) {
        $entityManager = $this->getDoctrine()->getManager();
        
        for($i=1; $i <= 4; $i++){
            //stockage de la valeur dans la variable email
            $email = $r->get('j'.strval($i));
            if ($email != null){
                //si nouveau joueur
                $joueur = new Joueur();
                $joueur->setEmail($email);
                //mise en session du joueur      
                $entityManager->persist($joueur);
                //on ajoute a la variable de session le joueur qui vient d'etre enregistrer
                $r->getSession()->set('j', strval($i), $joueur);
            }
            $entityManager->flush();
        }
        
        
        
        return $this->redirectToRoute('createPerso');
        
    }
}
