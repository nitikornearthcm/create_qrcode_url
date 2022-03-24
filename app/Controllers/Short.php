<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Url_Model;

class Short extends BaseController
{
    public function index(){
        $model = new Url_Model();
        $short_url = $_GET['url'];
        $full_url = $model->getURL($short_url);
        echo"<script> document.location.href='".@$full_url->full_url."' </script>"; 
    }
}
