<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ImageController extends BaseController
{
    public static $images = array("https://storage.googleapis.com/imagenes_taller2/imagen1.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen2.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen3.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen4.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen5.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen6.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen7.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen8.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen9.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen10.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen11.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen12.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen13.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen14.jpg",
    "https://storage.googleapis.com/imagenes_taller2/imagen15.jpg",
);

public function image()
{
    $numberOfImages = 15;
    $randomNumber = (rand(0, ($numberOfImages-1)));
    $randomImage = Controller::$images[$randomNumber];
    $type = 'image/jpg';
    $headers = ['Content-Type' => $type];
    $response = new BinaryFileResponse($randomImage, 200, $headers);
    return $response;
}

    
}


