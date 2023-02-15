<?php

namespace App\Models;

use CodeIgniter\Model;

class DashModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pa_users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id",
        "profile_image",
        "first_name",
        "last_name",
        "user_name",
        "email",
        "password",
        "phone_number",
        "date_of_birth",
        "gender",
        "is_active",
        "is_admin",
        "created_at",
        "updated_at",
        "device_ip",
        "device_type",
        "is_terms_and_conditions_checked",
        "is_remembered",
        "role",
        "security_token"
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
