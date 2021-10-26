<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ImageController extends BaseController
{
    public static $quotes = array("https://storage.googleapis.com/imagenes_taller2/imagen1.jpg", 
        "https://storage.googleapis.com/imagenes_taller2/imagen10.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen11.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen12.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen13.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen14.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen15.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen2.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen3.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen4.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen5.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen6.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen7.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen8.jpg",
        "https://storage.googleapis.com/imagenes_taller2/imagen9.jpg",
    );

    public function image()
    {
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
    }

    
}


