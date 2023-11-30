<?php

namespace App\Controllers;

use App\Models\CustomerModel;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
         // Load the session service
         $session = session();

        // Retrieve user information from session
        $userId = $session->get('user_id');
        $roleId = $session->get('role_id');
        $branchId = $session->get('branch_id'); // Assuming you store branch_id in the session

        // Set pagination parameters
        $perPage = 10; // Number of records per page
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch customer data based on user role and branch
        $customerModel = new CustomerModel();

        if ($roleId == 1) {
            // If user is admin, fetch all customers
            $customers = $customerModel->paginate($perPage);
        } else {
            // If user is not admin, fetch customers based on branch
            $customers = $customerModel->where('branch_id', $branchId)->paginate($perPage);
        }

        // Pass pagination details and customer data to the view
        $data['pager'] = $customerModel->pager;
        $data['customers'] = $customers;

        // Load your view and pass data
        return view('dashboard', $data);
    }
}
