<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'email', 'mobile', 'branch_id', 'country', 'city', 'address','created_by',
    ];

    // Add validation rules here if needed
    protected $validationRules = [
        'name' => 'required',
        'email' => 'required|valid_email',
        'mobile' => 'required',
        'branch_id' => 'required',
        'country' => 'required',
        'city' => 'required',
        'address' => 'required',
    ];

    protected $validationMessages = [
        // Customize validation error messages if needed
    ];

    protected $skipValidation = false; // Set to true if you want to skip validation during save/update

    // Add any other custom methods for the model if needed
}
