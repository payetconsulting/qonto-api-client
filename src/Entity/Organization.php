<?php

namespace QontoClient\Entity;

use QontoClient\Entity\Account;

class Organization {

    private $slug = null;

    private $bankAccounts = array();

    public function __construct() {
        // TODO
    }

    public function setSlug($slug) {
        $this->slug = $slug;
        return $this;
    }

    public function addAccount(Account $Account) {
        $this->bankAccounts[] = $Account;
        return $this;
    }

    public function addAccountInfo($slug = null, $iban = null, $bic = null, $current = null, $balance = 0, $balance_cents = 0, $authorized_balance = 0, $authorized_balance_cents = 0) {
        $account = new Account();

        $account->setSlug($slug)
                ->setIban($iban)
                ->setBic($bic)
                ->setCurrent($current)
                ->setBalance($balance)
                ->setBalanceCents($balanceCents)
                ->setAuthorizedBalance($authorized_balance)
                ->setAuthorizedBalanceCents($authorized_balance_cents);

        $this->addAccount($account);
        return $this;
    }

}