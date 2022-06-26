<?php

class _contact extends Controller
{
    public function index()
    {
        
        $this->view('frontend/contact');
   
    }

    public function sendEmail()
    {
     $firstname             = htmlspecialchars($_POST['firstname']);
     $lastname              = htmlspecialchars($_POST['lastname']);
     $email                 = htmlspecialchars($_POST['email']);
     $telp                  = htmlspecialchars($_POST['telp']);
     $propertyaddress       = htmlspecialchars($_POST['propertyaddress']);
     $sequarefootage        = htmlspecialchars($_POST['sfp']);
     $estimate1             = htmlspecialchars($_POST['ecb']);
     $estimate2             = htmlspecialchars($_POST['efdb']);;
     $scwbi                  = htmlspecialchars($_POST['scwbi']);



      $judul = "Pesan dari " . $firstname . " " . $lastname;
      $isi = '<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="bobok id" />
    <meta name="keywords" content="bobok, id, rosalyne" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TAMU.ID</title>
    <link rel="icon" href="img/assets/logo-bulat.png" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet" />

    <style>
        .box {
            max-width: 600px;
            height: auto;
            background-color: white;
            border-radius: 5px;
        }
        
        .box-body {
            max-width: 600px;
            text-align: left;
            margin-left: 20px;
        }
        
        .text-muted {
            color: #6c757d !important;
        }
        
        h1 {
            margin-top: 0px;
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: rgb(0, 0, 0, 0.9);
            font-weight: 300;
        }
        
        .h2,
        h2 {
            margin-top: 0px;
            font-size: 2rem;
            margin-bottom: 10px;
            color: rgb(0, 0, 0, 0.9);
            font-weight: 300;
        }
        
        h3 {
            margin-top: 0px;
            font-size: 1.75rem;
            margin-bottom: 10px;
            color: rgb(0, 0, 0, 0.9);
            font-weight: 300;
        }
        
        h4 {
            margin-top: 0px;
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: rgb(0, 0, 0, 0.9);
            font-weight: 300;
        }
        
        h5 {
            margin-top: 0px;
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: rgb(0, 0, 0, 0.9);
            font-weight: 300;
        }
        
        h6 {
            margin-top: 0px;
            font-size: 1rem;
            margin-bottom: 10px;
            color: rgb(0, 0, 0, 0.9);
            font-weight: 300;
        }
    </style>
</head>

<body style="background-color: rgb(128, 128, 128, 0.08)">
    <br />

    <div>
        <center>
            <div class="box">
                <div>
                    <img src="https://tamu.id/assets/images/headerMail.png" style="max-width: 600px; border-radius: 5px 5px 0 0" alt="" />
                </div>
                <div class="box-body">
                    <br />
                    <h4>Hallo, Arrow Arcitectur</h4>
                    <h6 style="margin-top: 5px">
                        Ada oreder baru dengan deskripsi : <br /> 
                        Nama : '.$firstname.' '.$lastname.'<br />
                         Telpon : '.$telp.' <br /> 
                         Email : '.$email.' <br /> 
                         Property Address : '.$propertyaddress.' <br /> 
                         Sequare Footage Of Property : '.$sequarefootage.'
                        <br /> 
                        Estimated Construction Budget : '.$estimate1.' <br /> 
                        Estimated Furniture & Decor Budget : '.$estimate2.' <br />
                        Scope of Work to Be Included : '.$scwbi.'  <br />
                        <br /> <br /> <br /> <br /> Salam,
                        <br /> <br /> '.$firstname.' '.$lastname.'

                    </h6>
                </div>


                <div style="
                           background-image: url(https://tamu.id/assets/images/footerMail.png);
                           background-repeat: no-repeat;
                           background-size: cover;
                           height: 80px;
                           width: 600px;
                           border-radius: 0 0 5px 5px;">
                    <div>
                        <p style="color: white">
                            <br /> Present by <a href="tamu.id" style="color: white">TAMU.ID</a>
                            <br /> Copyright '.date('Y').' '.PROJECT.'  - All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </center>
    </div>
    <!-- pilihan 2 end -->
</body>

</html>';
      $email = kirim_email('hardiantojr29@gmail.com', PROJECT, $judul, $isi);
    
      if ($email) {
        FlasherAlert::setFlashA('Email terkirim' , '', 'success');
        Redirect::to('/_contact');
    }else {
          FlasherAlert::setFlashA('Email gagal terkirim', '', 'error');
          Redirect::to('/_contact');
      }

    }
}
