<?php

namespace QontoClient\Entity;

class Bank {

    private $slug = null;

    private $iban = null;

    private $bic = null;

    private $current = null;

    private $balance = 0;

    private $balance_cents = 0;

    private $authorized_balance = 0;

    private $authorized_balance_cents = 0;

    public function __construct() {
        // TODO
    }

    public function setSlug($slug) {
        $this->slug = $slug;
        return $this;
    }

    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    public function setCurrent($current) {
        $this->current = $current;
        return $this;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    public function setBalanceCents($balanceCents) {
        $this->balance_cents = $balanceCents;
        return $this;
    }

    public function setAuthorizedBalance($authorizedBalance) {
        $this->authorized_balance = $authorizedBalance;
        return $this;
    }

    public function setAuthorizedBalanceCents($authorizedBalanceCents) {
        $this->authorized_balance_cents = $authorizedBalanceCents;
        return $this;
    }

}