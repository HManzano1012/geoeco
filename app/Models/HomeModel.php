<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
  public function get_municipios(){
    $builder = $this->db->table('munsv');
    return $builder->get()->getResult();
  }

  public function save_place($data){
    $builder = $this->db->table('places');
    $builder->insert($data);
  }

  public function get_places($active = true){
    $builder = $this->db->table('places');
    $builder->select('places.*,munsv.MunName as municipio');
    $builder->join('munsv','places.id_municipio = munsv.id');
    if($active){
    $builder->where('places.active',1);
    }
    return $builder->get()->getResult();
  }

  public function get_zones(){
    $builder = $this->db->table('zonesv');
    $builder->select('*');
    return $builder->get()->getResult();
  }

  public function aprove_place($id){
    $builder = $this->db->table('places');
    $builder->where('id',$id);
    $builder->update(['active' => 1]);
  }
}
