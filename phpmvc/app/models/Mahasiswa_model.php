<?php

class Mahasiswa_model
{
  // db handler = menampung koneksi ke db
  private $dbh;
  // statement = menyimpan query
  private $stmt;

  public function __construct()
  {
    // data source name = identitas server
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }


  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
