<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BranchesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Project Manager'],
            ['name' => 'HR Manager'],
            ['name' => 'CIO'],
        ];

        $this->db->table('branches')->insertBatch($data);
    }
}
