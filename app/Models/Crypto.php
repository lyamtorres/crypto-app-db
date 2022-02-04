<?php

namespace App\Models;

class Crypto extends Dbh
{
    private $id;
    private $name;
    private $symbol;
    private $price;
    private $supply;
    private $category;
    private $date;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSymbol()
    {
        return $this->symbol;
    }

    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getSupply()
    {
        return $this->supply;
    }

    public function setSupply($supply)
    {
        $this->supply = $supply;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function create(array $data)
    {

    }

    public function read()
    {
        $sql = "SELECT * FROM crypto";
        $list = [];

        try {
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                $crypto = new Crypto();
                $crypto->id = $row['id'];
                $crypto->name = $row['name'];
                $crypto->symbol = $row['symbol'];
                $crypto->price = $row['price'];
                $crypto->supply = $row['supply'];
                $crypto->category = $row['category'];
                $crypto->date = $row['date'];

                array_push($list, $crypto);
            }
        }

        catch (PDOException $e) {
            echo utf8_encode("Échec de select : " . $e->getMessage() . "\n");
            die();
        }

        return $list;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}