<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Admin'],
            ['name' => 'Manager'],
            ['name' => 'Executive'],
        ];

        // Uncomment the line below if you want to clear the table before seeding
        // $this->db->table('roles')->truncate();

        $this->db->table('roles')->insertBatch($data);
    }
}
