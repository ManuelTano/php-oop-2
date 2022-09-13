<?php

class Order {
    private $address;
    private $credit_card;
    private $products;
    private $amount;

    public function __construct($address, $credit_card, $products, $amount)
    {
        $this->setAddress($address);
        $this->setCreditCard($credit_card);
        $this->setProducts($products);
        $this->setAmount($amount);
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of credit_card
     */
    public function getCreditCard()
    {
        return $this->credit_card;
    }

    /**
     * Set the value of credit_card
     */
    public function setCreditCard($credit_card): self
    {
        $this->credit_card = $credit_card;

        return $this;
    }

    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     */
    public function setProducts($products): self
    {
        
        if(count($products) && count(array_filter($products, function($product){
            return $product instanceof Product;
        })))
        $this->products = $products;
        return $this;
    }

    /**
     * Get the value of amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     */
    public function setAmount($amount): self
    {
        $this->amount = $amount;

        return $this;
    }

}

?>