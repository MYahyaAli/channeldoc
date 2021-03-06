<?php
    namespace App\Models;

    class userModel extends \CodeIgniter\Model
    
    {
        public function __construct()
        {
            parent::__construct();
        }
        protected $table = 'User'; // Give the table name

        protected $allowedFields=['id', 'firstname', 'lastname', 'phone', 'email', 'password', 'nic', 'address', 'type','approved'];

        protected $returnType = 'App\Entities\User';

    }
?>