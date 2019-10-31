<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class UserTokensModel extends Eloquent {

    protected $table = "UserTokens";
    public $timestamps = false;

    public function getUserId($token)
    {
        $tokenSearch = self::where("Token", $token)->first();
        return $tokenSearch->user_id;
    }


}