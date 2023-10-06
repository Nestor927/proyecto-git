<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        //echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function platos_principales()
    {
        $data['titulo']='platos principales';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/platos_principales');
        echo view('front/footer_view');
    }

    public function postres()
    {
        $data['titulo']='postres';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/postres');
        echo view('front/footer_view');
    }

    public function panificados()
    {
        $data['titulo']='panificados';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/panificados');
        echo view('front/footer_view');
    }

    public function registro()
    {
        $data['titulo']='registrarse';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

}
?>