<?php
class  SocialMedia{

}
class Facebook extends SocialMedia{
   final public function login (string $username, string $password) : bool{
        return true;
    }
}
//error
class FakeFacebook extends Facebook{
//    error
    public function login(string $username, string $password): bool
    {
        return false;
    }
}