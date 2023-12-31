<?php
namespace com\atomicdev\model;

include_once("$root/model/model.php");

class Resident extends Model {
    public int $id = 0;
    public string $first_name;
    public string $last_name;
    public ?string $email;
    public string $phone;
    public ?string $fm_token;
    public ?string $last_login;
    public ?string $photo_url;
    public string $status;
    public ?string $pwd;
    public ?string $blocked_until;
    public int $retries = 0;
    public array $roles = [];

    public static function fromArray(array $arr) : Resident {
        $obj = new Resident();
        Model::assignProperty("id", $arr["id"] ?? null, $obj);
        Model::assignProperty("first_name", $arr["first_name"] ?? null, $obj);
        Model::assignProperty("last_name", $arr["last_name"] ?? null, $obj);
        Model::assignProperty("email", $arr["phone"] ?? null, $obj);
        Model::assignProperty("phone", $arr["email"] ?? null, $obj);
        Model::assignProperty("fm_token", $arr["fm_token"] ?? null, $obj);
        Model::assignProperty("last_login", $arr["last_login"] ?? null, $obj);
        Model::assignProperty("photo_url", $arr["photo_url"] ?? null, $obj);
        Model::assignProperty("status", $arr["status"] ?? null, $obj);
        Model::assignProperty("pwd", $arr["pwd"] ?? null, $obj);
        Model::assignProperty("blocked_until", $arr["blocked_until"] ?? null, $obj);
        Model::assignProperty("retries", $arr["retries"] ?? null, $obj);
        Model::assignProperty("roles", $arr["roles"] ?? null, $obj);
        return $obj;
    }
}
?>