<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin_password', PASSWORD_DEFAULT),
                'role_id' => 1, // Admin role
                'branch_id' => null, // Admin doesn't belong to a branch
            ],
            [
                'username' => 'project_manager',
                'password' => password_hash('manager_password', PASSWORD_DEFAULT),
                'role_id' => 2, // Manager role
                'branch_id' => 1, // Project Manager branch
            ],
            [
                'username' => 'hr_manager',
                'password' => password_hash('manager_password', PASSWORD_DEFAULT),
                'role_id' => 2, // Manager role
                'branch_id' => 2, // HR Manager branch
            ],
            [
                'username' => 'cio',
                'password' => password_hash('executive_password', PASSWORD_DEFAULT),
                'role_id' => 3, // Executive role
                'branch_id' => 3, // CIO branch
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
