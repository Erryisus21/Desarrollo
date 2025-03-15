<?php
class UserModel {
    private $users = [
        ['username' => 'admin', 'password' => '1234'],
        ['username' => 'juan', 'password' => '5678']
    ];

    public function validateUser($username, $password) {
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return $user;
            }
        }
        return null;
    }
}
