<?php

namespace QontoClient\Entity;

class Transaction {

    private $transaction_id = null;

    private $amount = 0;

    private $amount_cents = 0;

    private $local_amount = 0;

    private $local_amount_cents = 0;

    private $slide = null;

    private $operation_type = null;

    private $currency = null;

    private $local_currency = null;

    private $settled_at = null;

    private $emitted_at = null;

    private $status = null;

    private $note = null;

    private $label = null;

    public function __construct() {
        // TODO
    }

    public function setTransactionId($id) {
        $this->transaction_id = $id;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function setAmountCents($amountCents) {
        $this->amount_cents = $amountCents;
        return $this;
    }

    public function setLocalAmount($localAmount) {
        $this->local_amount = $localAmount;
        return $this;
    }

    public function setLocalAmountCents($localAmountCents) {
        $this->local_amount_cents = $localAmountCents;
        return $this;
    }

    public function setSlide($slide) {
        $this->slide = $slide;
        return $this;
    }

    public function setOperationType($operationType) {
        $this->operation_type = $operationType;
        return $this;
    }

    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    public function setLocalCurrency($localCurrency) {
        $this->local_currency = $localCurrency;
        return $this;
    }

    public function setSettledAt($settledAt) {
        $this->settled_at = $settleAt;
        return $this;
    }

    public function setEmittedAt($emittedAt) {
        $this->emitted_at = $emittedAt;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setNote($note) {
        $this->note = $note;
        return $this;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

}