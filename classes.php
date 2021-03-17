<?php

// PRODOTTO
class Product  {
  protected $id;
  protected $name;
  protected $brand;
  protected $price;

    public function __construct (int $id, string $name, string $brand, int $price) {
      $this->id = $id;
      $this->name = $name;
      $this->brand = $brand;
      $this->price = $price;
    }
}

// Alimentari
class Food extends Product
{
  protected $category = 'food';
  protected $weigth;
  protected $exp_date;
  //setter
  function setProp(int $weigth, string $exp_date) {
    $this->weigth = $weigth;
    $this->exp_date = $exp_date;
  }

}

// Tecnologìa
class Tech extends Product
{
  protected $category = 'tech';
  protected $type;
  protected $year;
  //setter
  function setProp(string $type, int $year) {
    $this->type = $type;
    $this->year = $year;
  }

}

// Abbigliamento
class Dress extends Product
{
  protected $category = 'dress';
  protected $material;
  protected $size;
  //setter
  function setProp(string $material, string $size) {
    $this->material = $material;
    $this->size = $size;
  }
}

// UTENTE
class User {
  protected $id;
  protected $name;
  protected $password;

  public function __construct (int $id, string $name, string $password) {
    $this->id = $id;
    $this->name = $name;
    $this->password = $password;
  }
}

// Venditore
class Seller extends User
{
  protected $tax_code;
  protected $products = [];
  //setter
  function setProp(int $tax_code) {
    $this->tax_code = $tax_code;
  }
  function addProduct(Product $product) {
    $this->products[] = $product;
  }
}

// Compratore
class Buyer extends User
{
  protected $address;
  protected $credit_card = false;
  //setter
  function setProp(string $address) {
    $this->address = $address;
  }
  function addCard(Card $card) {
    $this->credit_card = $card;
  }
}

// CARTA CREDITO
class Card
{
  protected $num;
  //setter
  function __construct (string $num) {
    $this->num = $num;
  }
}

class Transition {
  protected $id;
  protected $buyer;
  protected $seller;
  protected $products = [];

  public function __construct (Buyer $buyer, Seller $seller, int $id) {
    $this->buyer = $buyer;
    $this->seller = $seller;
    $this->id = $id;
  }

  function addProduct(Product $product) {
    $this->products[] = $product;
  }
  function getId() {
    return $this->id;
  }
}
