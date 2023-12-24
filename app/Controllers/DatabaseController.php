<?php
// In your controller, for example, DatabaseController.php
namespace App\Controllers;

use CodeIgniter\Controller;

class DatabaseController extends Controller
{
    public function createTable()
    {
        // Load the database library
        $db = \Config\Database::connect();

        $db->forge = \Config\Database::forge($db);

        // Define table structure
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ];

        // Create the 'users' table
        $db->forge->addField($fields);
        $db->forge->addKey('id', true);
        $db->forge->createTable('users2');

        echo 'Table created successfully!';
    }
}

?>