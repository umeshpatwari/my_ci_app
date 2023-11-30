<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\BranchModel; 
use App\Models\CountryModel;
use CodeIgniter\Controller;

class Customers extends Controller
{
    // Show the list of customers
    public function index()
    {
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();

        return view('customers/index', $data);
    }

    // Show the form to create a new customer
    public function create()
    {
        $branchModel = new BranchModel();
        $data['branches'] = $branchModel->findAll(); // Fetch branches for dropdown
        $countryModel = new CountryModel();
        $data['countries'] = $countryModel->findAll();

        return view('customers/create', $data);
    }

    // Store a new customer
    public function store()
    {
        $customerModel = new CustomerModel();
        $session = session();

        // Your existing code...
        $currentUserId = $session->get('user_id');
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'country' => $this->request->getPost('country'),
            'city' => $this->request->getPost('city'),
            'address' => $this->request->getPost('address'),
            'branch_id' => $this->request->getPost('branch_id'),
            'created_by' => 1,
        ];

        $customerModel->insert($data);

        return redirect()->to('/dashboard');
    }

    // Show the form to edit a customer
    public function edit($id)
    {
        $customerModel = new CustomerModel();
        $branchModel = new BranchModel();
        
        $data['customer'] = $customerModel->find($id);
        $data['branches'] = $branchModel->findAll();

        return view('customers/edit', $data);
    }

    // Update a customer
    public function update($id)
    {
        $customerModel = new CustomerModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'country' => $this->request->getPost('country'),
            'city' => $this->request->getPost('city'),
            'address' => $this->request->getPost('address'),
            'branch_id' => $this->request->getPost('branch_id'),
        ];

        $customerModel->update($id, $data);

        return redirect()->to('/customers');
    }

    // Delete a customer
    public function delete($id)
    {
        $customerModel = new CustomerModel();
        $customerModel->delete($id);

        return redirect()->to('/customers');
    }
}
