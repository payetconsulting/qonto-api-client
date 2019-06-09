<?php

namespace QontoClient\Controller;

use QontoClient\Model\Organization;

class Client {
    
    private $loginApi;

    private $secretKey;

    public function __construct($loginApi, $secretKey) {
        $this->loginApi  = $loginApi;
        $this->secretKey = $secretKey;
    }

    public function getOrganization() {
        $organization = new Organization();
        return $organization->setLoginApi($this->loginApi)
                     ->setSecretKey($this->secretKey)
                     ->getOrganization();
    }



}
