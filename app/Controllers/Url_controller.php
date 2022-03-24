<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Url_Model;

class Url_controller extends BaseController
{
    public function index(){
        return view('gen_url');
    }

    public function test(){
        $model = new Url_Model();
        $full_url = $_POST['full_url'];
        $ran_url = substr(md5(microtime()), rand(0, 26), 5);
        $short_url = base_url().'/Short?url='.$ran_url;
        $data = array();
        $data['full_url'] = $full_url;
        $data['short_url'] = $short_url;
        $data['create_time'] = date('Y-m-d H:i:s');
        $model->saveURL($data);
        echo json_encode($data);
    }
}
