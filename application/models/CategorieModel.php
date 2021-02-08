<?php

// application/controllers/detail.php

defined('BASEPATH') or exit('No direct script access allowed');

class categorieModel extends CI_Model
{


    /**
     * \brief charge la vu ajouter
     * \return vu ajouter
     * \author Harold lefebvre
     * \date 01/02/2021
     */
    public function index()
    {
        echo "NULL";
    }

    public function cat($cat_id)
    {
        $this->load->database();
        $users = $this->db->query("SELECT * FROM categories WHERE cat_parent = ?", $cat_id);
        $tab = $users->result();
        if (!empty($tab)) {
            header('Access-Control-Allow-Origin: *');
            $sJson = json_encode($tab);
            header('Content-Type: application/json');
            echo $sJson;


        }
    }

}