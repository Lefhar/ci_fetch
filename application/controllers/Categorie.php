<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categorie extends CI_Controller
{


    /**
     * \brief vu par defaut de la liste des produit
     * \return page si l'email est bien envoyé de contact charge le modéle contactModel et usersModel pour si l'utilisateur est connecté
     * \author Harold lefebvre
     * \date 01/02/2021
     */

    public function index()
    {

        $this->load->model('categorieModel');

        /* On appelle la méthode liste() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */
        $this->categorieModel->index();
    }

    public function cat()
    {

        $cat_id =$this->uri->segment(3);
        // NOUVEAU CODE

        // Chargement du modèle 'categorieModel'
        $this->load->model('categorieModel');

        /* On appelle la méthode index() du modèle,
        * qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau)
        * remarque la syntaxe $this->nomModele->methode()
        */


        /**
         * \brief charge categorieModel
         * \param  $champs    le type dans l'url cat, prix, id etc
         * \return page si l'email est bien envoyé de contact charge le modéle contactModel et usersModel pour si l'utilisateur est connecté
         * \author Harold lefebvre
         * \date 01/02/2021
         */
        $this->categorieModel->cat($cat_id);



        // -- fin NOUVEAU CODE
    } // -- liste()


}

