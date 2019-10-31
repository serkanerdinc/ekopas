<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class UserModel extends Eloquent
{
    protected $table = "User";
    public $timestamps = false;
    public $appends = [];


    public static function userLogin($data)
    {

        $userSearch = self::where($data)->first();
        unset($userSearch->Password);
        if ($userSearch) {
            return [
                'user_id' => $userSearch->id,
                'token' => self::createToken($userSearch),
                'data' => $userSearch
            ];
        } else {
            return false;
        }
    }

    public static function tokenControl($token)
    {
        global $SCData;
        $tokenSearch = UserTokensModel::where("Token", $token)->first();
        if (!$tokenSearch) {
            return false;
        } else {

            $date1 = new DateTime($tokenSearch->UpdateDate);
            $date2 = new DateTime(date("Y-m-d H:i:s"));
            $SCData["user_id"] = $tokenSearch->UserId;
            $diff = $date2->diff($date1);

            $hours = $diff->h;
            $hour_diff = $hours + ($diff->days * 24);

            if ((int)$hour_diff > 1) {
                return false;
            }
        }

        self::updateToken($token);
        return true;
    }

    public static function updateToken($token)
    {
        $now = date("Y-m-d H:i:s");
        $tokenSearch = UserTokensModel::where("Token", $token);
        $tokenSearch->update(["UpdateDate" => $now]);
    }

    public static function createToken($data)
    {
        $tokenSearch = UserTokensModel::where("UserId", $data->id);
        $token = md5(bin2hex(openssl_random_pseudo_bytes(16)) . $data->email);

        if ($tokenSearch->first()) {
            $tokenSearch->update(["Token" => $token]);
        } else {
            $userToken = new UserTokensModel();
            $userToken->UserId  = $data->id;
            $userToken->Token   = $token;
            $userToken->save();
        }

        return $token;
    }


}
