<?php 


class SocialMedia {

    public string $name;
}

// final class artinya class ini tidak bisa lagi diturunkan ke class child nya
final class Facebook extends SocialMedia {

} 

// ERROR
class FakeFacebook extends Facebook {

}