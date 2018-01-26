<?php

namespace QontoClient\Model;

use QontoClient\Model\ApiModel;
use QontoClient\Entity\Organization as OrganizationEntity;

class Organization extends ApiModel {
    
    public function getOrganisation() {
        $data = $this->callApi('GET','organizations/' . $this->loginKey);

        $organization = new OrganizationEntity();

        return $organization;
    }

}