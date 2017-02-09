<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

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
     * @param Request $r
     */
    public function addPlayers(Request $r) {
        return $this->redirectToRoute('createPerso');
        
    }
}
