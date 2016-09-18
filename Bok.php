<?php

class Book {

  protected $title;
  protected $price;

  public function setPrice($price){

    if ($price < 0) {
      throw new Exception("Verður að vera jákvæð tala");
    }

    else {
      $this->price = $price;
    }

  }

  public function getPrice(){

    return $this->price;

  }

  public function setTitle($title){

    $this->title = $title;

  }

  public function getTitle(){

    return $this->title;

  }

} // Endir á klasa

class Publisher extends Book {

  protected $publisher;

  public function setPublisher($publisher){

    $this->publisher = $publisher;

  }

  public function getPublisher(){

    return $this->publisher;

  }

}

$efnafraedi = new Book;
$staerdfraedi = new Book;
$islenska = new Book;
$enska = new Publisher;

$efnafraedi->setPrice(1590);
$staerdfraedi->setPrice(3290);
$islenska->setPrice(1090);
$enska->setPrice(2250);

$efnafraedi->setTitle("Efnafræði");
$staerdfraedi->setTitle("Stærðfræði");
$islenska->setTitle("Íslenska");
$enska->setTitle("Enska");

$enska->setPublisher("Inna");

var_dump($enska);
