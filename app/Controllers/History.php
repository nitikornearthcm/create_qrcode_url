<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Url_Model;

class History extends BaseController
{
    public function index(){
        $model = new Url_Model();
        $url_all = $model->getURL_all();
        $data['history'] = $url_all;
        return view('history',$data);
    }
}
