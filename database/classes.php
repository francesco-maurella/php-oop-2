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

// Alimenti
class Food extends Product
{
  protected $category = 'food';
  protected $weigth;
  protected $exp_date:
  //setter
  function setProp(int $weigth, string $exp_date) {
    $this->weigth = $weigth;
    $this->exp_date = $exp_date;
  }

}

// Tech
class Tech extends Product
{
  protected $category = 'tech';
  protected $hardware;
  protected $model:
  //setter
  function setProp(string $hardware, string $model) {
    $this->hardware = $hardware;
    $this->model = $model;
  }

}

// Abbigliamento
class Dress extends Product
{
  protected $category = 'dress';
  protected $material;
  protected $size:
  //setter
  function setProp(string $material, string $size) {
    $this->material = $material;
    $this->size = $size;
  }

}


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

// Abbigliamento
class Seller extends User
{
  $tax_code;
  $products = [];
  //setter
  function setProp(string $tax_code) {
    $this->tax_code = $tax_code;
  }
  function addProduct(string $product) {
    $this->products[] = $product;
  }
}

class Transition {
  protected $id;
  protected $product;
  protected $user;
  protected $quantity;
  protected $price;

  public function __construct (int $id, int $product, int $user, int $quantity, int $price) {
    $this->id = $id;
    $this->product = $product;
    $this->user = $user;
    $this->quantity = $quantity;
    $this->price = $price;
  }
}
