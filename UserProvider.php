<?php

require_once 'UserModel.php';

class UserProvider
{
    private  array  $accounts = [
        'arr' => 'arr..'
    ];

    public function getByNameAndPassword(string $username, string $password): ?UserModel
    {
        var_dump($username, 'userProdider page', $password);
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return  new UserModel($username);
        }
        return null;
    }
}