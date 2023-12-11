<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HomeModel;

class Home extends BaseController
{
  private $homeModel;

  public function __construct(){
    $this->homeModel = new HomeModel;
  }

  public function index(): string
  {
    $municipios = $this->homeModel->get_municipios();
    $places = $this->homeModel->get_places();
    $data = [];
    $data['municipios'] = $municipios;
    $data['places'] = $places;
    $data['zones'] = $this->homeModel->get_zones();
    return view('index',$data);
  }

  public function dashboard(): string
  {
    $places = $this->homeModel->get_places(false);
    $data = [];
    $data['places'] = $places;
    return view('dashboard',$data);
  }

  public function saveSucursal(){
    $data = $this->request->getPost();
    $place_data = [
      "name" => $data['name'],
      "description" => $data['description'],
      "address" => $data['address'],
      "id_municipio" => $data['municipio'],
      "lon" => $data['longitude'],
      "lat" => $data['latitude'],
    ];
    
    $this->homeModel->save_place($place_data);
    $response = [];
    $response['success'] = true;

    echo json_encode($response);
  }

  public function aprovePlace(){
    $data = $this->request->getPost();
    $id = $data['id'];
    
    $this->homeModel->aprove_place($id);
    $response = [];
    $response['success'] = true;

    echo json_encode($response);
}
}
