<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Model_user extends CI_Model {

        public function cek_user($data) {
            $query = $this->db->get_where('login_session', $data);
            return $query;
        }

    }

?>