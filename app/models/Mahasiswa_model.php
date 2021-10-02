<?php

class Mahasiswa_model
{
  private $dbh; //database handler
  private $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }





  // private $mhs = [
  //   [
  //     "nama" => 'Putri Nurmeida',
  //     "nrp" => "193040157",
  //     "email" => "pnurmeida@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => 'Dimas Agung',
  //     "nrp" => "194030347",
  //     "email" => "dimasagngf@gmail.com",
  //     "jurusan" => "Manajemen"
  //   ],
  //   [
  //     "nama" => 'Olive Catty',
  //     "nrp" => "210500006",
  //     "email" => "Olivecat@gmail.com",
  //     "jurusan" => "Teknik Pangan"
  //   ]
  // ];


  public function getAllMahasiswa()
  {
    //return $this->mhs;
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
