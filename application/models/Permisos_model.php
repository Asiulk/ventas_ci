<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_model extends CI_Model {
  public function getPermisos(){
    $this->db->select("p.*,m.nombre as menu, r.nombre as rol");
    $this->db->from("permisos p");
    $this->db->join("roles r","p.rol_id = r.id");
    $this->db->join("menus r","p.menu_id = m.id");
    $result = $this->db->get();
    return $resultados->result();
  }
}
