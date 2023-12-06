<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthController extends BaseController
{
  private $authModel;
  
  public function __construct()
  {
    $this->authModel = new AuthModel();
  }

  public function index() : string | object
  {
    if($this->session->isLoggedIn){
      return redirect()->to('/');
    }
    return view('login');
  }

  public function login() :  object
  {
    $response = [];
    if(!$this->request->isAJAX()){
      $response['status'] = 500;
      $response['message'] = 'No se puede procesar la solicitud';
      return $this->response->setJSON($response);
    }

    $rules = [
      'email' => 'required|valid_email',
      'password' => 'required|min_length[8]|max_length[20]'
    ];

    $errors = [
      'email' => [
        'required' => 'El correo electrónico es requerido',
        'valid_email' => 'El correo electrónico no es válido'
      ],
      'password' => [
        'required' => 'La contraseña es requerida',
        'min_length' => 'La contraseña debe tener al menos 8 caracteres',
        'max_length' => 'La contraseña debe tener máximo 20 caracteres'
      ]
    ];

    if(!$this->validate($rules,$errors)){
      $response['status'] = 500;
      $response['success'] = false;
      $response['message'] = 'No se puede procesar la solicitud';
      $response['errors'] = $this->validator->getErrors();
      return $this->response->setJSON($response);
    }

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $user = $this->authModel->where('email',$email)->first(); 

    if (!$user) {
      $response['status'] = 500;
      $response['success'] = false;
      $response['message'] = 'No se puede procesar la solicitud';
      $response['errors'] = ['email' => 'El correo electrónico no existe'];
      return $this->response->setJSON($response);
    }

    $passwordVerify = password_verify($password,$user['password']);


    if (!$passwordVerify) {
      $response['status'] = 500;
      $response['success'] = false;
      $response['message'] = 'No se puede procesar la solicitud';
      $response['errors'] = ['password' => 'La contraseña es incorrecta'];
      return $this->response->setJSON($response);
    }

    $sessionData = [
      'id' => $user['id'],
      'nombre' => $user['name'],
      'email' => $user['email'],
      'isLoggedIn' => true
    ];

    $this->session->set($sessionData);

    $response['status'] = 200;
    $response['success'] = true;
    $response['message'] = 'Inicio de sesión exitoso';

    return $this->response->setJSON($response);
  }
}
