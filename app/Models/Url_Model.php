<?php

namespace App\Models;

use CodeIgniter\Model;

class Url_Model extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'url_generate';

    public function getURL($short_url ='')
    {
        $db = db_connect();
        $sql = "SELECT * FROM url_generate WHERE short_url like '%".$short_url."'";
        $row = $db->query($sql)->getRowObject();
        return $row;
    }

    public function saveURL($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getURL_all()
    {
        $db = db_connect();
        $sql = "SELECT * FROM url_generate ORDER BY url_id DESC";
        $row = $db->query($sql)->getResultArray();
        return $row;
      
    }
}