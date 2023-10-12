<?php

namespace Controller;

use Handler\Request;
use Model\ProductModel;
use Model\CarModel;
use Handler\View;


class ProductController
{
    public static function index()
    {
        // $products = ProductModel::getAllProducts();
        // $view = new View(['judul_halaman' => "Halaman Dashboard", "slug_halaman" => "halaman_dashboard", "jumlah_data" => 20]);
        // $view->render('about');
        $response = ["data" => ["data1" => "qweqweqwe", "testing1" => "qweqweqwe"]];
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public static function store(Request $request)
    {
        $response = ["data" => ["data1" => $request->input('data1'), "testing1" => $request->input('testing1')]];
        echo  json_encode($response);
    }
}
