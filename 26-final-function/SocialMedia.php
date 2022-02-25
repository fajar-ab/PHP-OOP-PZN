<?php 


class SocialMedia {

    public string $name;
}

class Facebook extends SocialMedia {

    // final function artinya function ini tidak bisa lagi di override oleh class childnya
    final public function login(string $username, string $password): bool
    {
        return true;
    }
} 

class FakeFacebook extends Facebook {

    // ERROR
    public function login(string $username, string $password): bool
    {
        return true;
    }
}