<?php


namespace app\model;


use db\Database;
use PDO;

class Gyarto
{
        private $id;
        private $nev;
        private $kep;
    private $errors;


    public static function findAll()
    {
        $conn = Database::getConnection();
        $sql = Sqlfiles::GyartoAll();
        $statement = $conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function findOneById($id)
    {
        $conn=Database::getConnection();
        $sql=Sqlfiles::findonegyartobyid();
        $statement=$conn->prepare($sql);
        $statement->execute([
            ':id' => $id,
        ]);
        return $statement->fetchObject(self::class);

    }
    public static function findOneByName($ertek)
        {

            $conn=Database::getConnection();
            $sql="SELECT * FROM gyarto where nev=:nev";
            $statement=$conn->prepare($sql);
            $statement->execute([
                ':nev' => $ertek,
            ]);
            return $statement->fetchObject(self::class);
        }
    public static function insert($nev)
    {

        $db = Database::getConnection();

        $statement = $db->prepare(Sqlfiles::insertgyarto());

        $result = $statement->execute([
            ':nev'=> $nev,

        ]);

        if(false == $result)
        {

            return false;
        }



        return true;

    }

    /**
     * @return mixed
     */
    public function getKep()
    {
        return $this->kep;
    }

    /**
     * @param mixed $kep
     */
    public function setKep($kep): void
    {
        $this->kep = $kep;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * @param mixed $nev
     */
    public function setNev($nev): void
    {
        $this->nev = $nev;
    }







}