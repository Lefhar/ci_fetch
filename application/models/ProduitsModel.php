<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class produitsModel extends CI_Model 
{


    /**
     * \brief produitsModel charge la fonction liste des produits
     * \param  $champs    le type dans l'url cat, prix, id etc
     * \param  $order    recupére si desc et asc
     * \return la vu liste
     * \author Harold lefebvre
     * \date 01/02/2021
     */
    public function liste($champs,$order)
    {

            // Charge la librairie 'database'
            $this->load->helper('form', 'url'); 
    $this->load->database();
      // Exécute la requête 
      if(!empty($champs)&&$champs =='cat'&&$order =='asc')
      {
            $order = "order by cat_nom asc";
      }
      elseif(!empty($champs)&&$champs =='cat'&&$order =='desc')
      {
        $order = "order by cat_nom desc";
      }
      elseif(!empty($champs)&&$champs =='prix'&&$order =='asc')
      {
            $order = "order by pro_prix asc";
      }
      elseif(!empty($champs)&&$champs =='prix'&&$order =='desc')
      {
            $order = "order by pro_prix desc";
      }
      else
      {
        $order = "order by pro_id asc";
      }
      $results = $this->db->query("SELECT pro_id, cat_nom , pro_libelle, pro_prix, pro_couleur, pro_photo, pro_ref, pro_stock, pro_d_ajout, pro_d_modif, pro_bloque  FROM produits join categories on cat_id = pro_cat_id ".$order);  

    // Récupération des résultats    
    $aListe = $results->result(); 
 
        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
        $aView["liste_produits"] = $aListe;
        $aViewHeader = $this->usersModel->getUser();
        $aViewHeader = ["title" => "Liste des produits","user" => $aViewHeader];
    // Appel des différents morceaux de vues
    $this->load->view('header', $aViewHeader);
    $this->load->view('liste', $aView);

    /* On pourrait très bien avoir des variables à passer au morceau de vue 'footer', 
    * mais, juste pour vous embêter, ce n'est pas le cas dans cet exemple ! 
    */
    $this->load->view('footer');
    }
}