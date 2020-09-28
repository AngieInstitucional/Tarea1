<?php

namespace App\Models;

class UserAuthenticated{
    private static $INSTANCE;
    private $jwt;
    private $permisos;

    private function __construct(){}

    public static function getInstance(){
        if(null == self::$INSTANCE){
            self::$INSTANCE = new UserAuthenticated();
        }
        return self::$INSTANCE;
    }

    public function setData($data){
        $this->jwt = $data['jwt'];
        foreach($data['permisos'] as $item){
            $permisos[] = ($item['permiso']['codigo']);
        }
    }

    public function getJwt(){
        return $this->jwt;
    }
}

?>