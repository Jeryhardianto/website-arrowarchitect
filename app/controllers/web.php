<?php

class web extends Controller
{

    public function index()
    {
        // $data['title'] = 'NOOBIEDEV';
        // $data['projects'] = $this->model('Project_model')->getAllProject();
        // // Contact
        // $data['contact']  = $this->model('Contact_model')->getContactById(1);

        
        $this->view('frontend/templates/header');
        $this->view('frontend/index');
        $this->view('frontend/templates/footer');
    }

}