<?php namespace App\Controllers;

use App\Models\RoleModel;
use App\Models\BranchModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $roleModel = new RoleModel();
        $roles = $roleModel->findAll();

        $branchModel = new BranchModel();
        $branches = $branchModel->findAll();

        $userModel = new UserModel();
        $users = $userModel->findAll();

        // Your logic here...

        return view('welcome_message');
    }
}
