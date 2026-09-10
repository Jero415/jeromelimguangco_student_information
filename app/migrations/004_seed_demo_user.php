<?php

class Seed_demo_user
{
    private $_lava;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->database();
    }

    public function up()
    {
        $username = 'labadmin';
        $db = $this->_lava->db;

        if (!$db->raw("SHOW COLUMNS FROM users LIKE 'password'")->fetch()) {
            $db->raw('ALTER TABLE users ADD COLUMN password VARCHAR(255) NULL');
        }

        if ($db->table('users')->where('username', $username)->get()) {
            return;
        }

        $db->table('users')->insert([
            'username' => $username,
            'email' => 'labadmin@example.com',
            'password' => password_hash('Lab@12345', PASSWORD_DEFAULT),
            'role' => 'admin',
            'is_active' => 1,
        ]);
    }

    public function down()
    {
        $this->_lava->db->table('users')->where('username', 'labadmin')->delete();
    }
}