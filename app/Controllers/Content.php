<?php
namespace App\Controllers;
class Content extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('view_content');
        echo view('template/footer');
    }

}