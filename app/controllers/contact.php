<?php

class contact extends Controller
{
    public function __construct()
    {
        if (Session::get('id') != 1 && Session::get('status') != 'logged') {
            Redirect::to('/login');
        }
    }


    public function index()
    {
        $data['title'] = 'Contact | '.PROJECT;
        $id = 1;
        $data['contact'] = $this->model('Contact_model')->getContactById($id);

        $this->view('backend/templates/header', $data);
        $this->view('backend/templates/sidebar', $data);
        $this->view('backend/contact', $data);
        $this->view('backend/templates/footer');
    }

    

   
}