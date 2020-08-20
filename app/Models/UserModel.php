<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function get_data($no_kk, $no_nik)
    {
        return $this->db->table('user')
            ->where(array('no_kk' => $no_kk, 'no_nik' => $no_nik))
            ->get()->getRowArray();
    }
}
