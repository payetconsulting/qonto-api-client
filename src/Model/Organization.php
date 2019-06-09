<?php

namespace QontoClient\Model;

use QontoClient\Model\ApiModel;
use QontoClient\Entity\Organization as OrganizationEntity;

class Organization extends ApiModel {

    public function getOrganization() {
        $data = $this->callApi('GET','organizations/' . $this->loginApi);

        $organization = new OrganizationEntity();

        return $organization;
    }

}
