<?php

namespace app\model;
use db\Database;
use PDO;
use app\model\Sqlfiles;
class Computer
{
    private $id;
    private $gyarto;
    private $nev;
    private $processor;
    private $memoria;
    private $videokartya;
    private $hattertar;
    private $optikaimeghajto;
    private $usba;
    private $usbc;
    private $hdmi;
    private $vga;
    private $dvid;
    private $display;
    private $rj45;
    private $fullhalgato;
    private $mikrofon;
    private $hiba;
    private $ar;
    private $garancia;
    private $kep;
    private $processorgyujto;
    private $tipus;
    private $betu;
    private $ddr;
    private $tar;
    private $tarmeret;
    private $oprendszer;
    private $keszlet;
    private $ddrertek;
    private $errors = [];
    private $loadable;
    private $hattertar2;
    private $tar2;
    private $slot;
    private $ddr2;


public function ProcMemoSet()
{

    if($_POST['intel']=="on")
    {

        $this->processor = $this->processorgyujto." ".$this->tipus.$this->betu;


    }
    else {
        $this->processor=$_POST["processor"]." ".$this->processorgyujto;


    }

    $this->memoria=$this->ddrertek." ". $this->ddr.",".$this->slot. " ".$this->ddr2 ;
    $this->hattertar=$this->tarmeret. $this->tar;
    $this->hattertar2=$this->tarmeret2.$this->tar2;

}


    public static function findAll()
    {
        $conn = Database::getConnection();
        $statement = $conn->prepare(Sqlfiles::findall());
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS,self::class);

    }

    public static function findOneById($id)
    {
        $conn = Database::getConnection();
        $statement = $conn->prepare(Sqlfiles::findonebyid());
        $statement->execute([
            ':id' => $id,
        ]);
        return $statement->fetchObject(self::class);
    }



    //adott gép adatainak betöltése
    public function load($data)
    {

    $valid=new validal();

    $this->loadable=$valid->createLoadable();

        foreach ($this->loadable as $item) {
            if ('' != $data[$item]||$data[$item]!="on") {
                   $this->$item = $data[$item];

               }
            }

        }



public function Insert()
{

    $db = Database::getConnection();

    $this->ProcMemoSet();


    $statement = $db->prepare(Sqlfiles::insert());
    $result = $statement->execute([
        ':gyarto'=>$this->gyarto,
        ':nev' => $this->nev,
        ':processor' => $this->processor,
        ':memoria' => $this->memoria,
        ':videokartya' => $this->videokartya,
        ':hattertar' => $this->hattertar,
        ':hattertar2'=>$this->hattertar2,
        ':optikaimeghajto' => $this->optikaimeghajto,
        ':usba' => $this->usba,
        ':usbc'=>$this->usbc,
        ':hdmi'=>$this->hdmi,
        ':vga'=>$this->vga,
        ':dvid'=>$this->dvid,
        ':display'=>$this->display,
        ':rj45'=>$this->rj45,
        ':fullhalgato'=>$this->fullhalgato,
        ':mikrofon'=>$this->mikrofon,
        ':hiba'=>$this->hiba,
        ':ar'=>$this->ar,
        ':garancia'=>$this->garancia,
        ':kep'=>$this->kep,
        ':oprendszer'=>$this->oprendszer,
        ':keszlet'=>$this->keszlet
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

    /**
     * @return mixed
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * @param mixed $processor
     */
    public function setProcessor($processor): void
    {
        $this->processor = $processor;
    }

    /**
     * @return mixed
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * @param mixed $memoria
     */
    public function setMemoria($memoria): void
    {
        $this->memoria = $memoria;
    }

    /**
     * @return mixed
     */
    public function getVideokartya()
    {
        return $this->videokartya;
    }

    /**
     * @param mixed $videokartya
     */
    public function setVideokartya($videokartya): void
    {
        $this->videokartya = $videokartya;
    }

    /**
     * @return mixed
     */
    public function getHattertar()
    {
        return $this->hattertar;
    }

    /**
     * @param mixed $hattertar
     */
    public function setHattertar($hattertar): void
    {
        $this->hattertar = $hattertar;
    }

    /**
     * @return mixed
     */
    public function getOptikaimeghajto()
    {
        return $this->optikaimeghajto;
    }

    /**
     * @param mixed $optikaimeghajto
     */
    public function setOptikaimeghajto($optikaimeghajto): void
    {
        $this->optikaimeghajto = $optikaimeghajto;
    }

    /**
     * @return mixed
     */
    public function getUsba()
    {
        return $this->usba;
    }

    /**
     * @param mixed $usba
     */
    public function setUsba($usba): void
    {
        $this->usba = $usba;
    }

    /**
     * @return mixed
     */
    public function getUsbc()
    {
        return $this->usbc;
    }

    /**
     * @param mixed $usbc
     */
    public function setUsbc($usbc): void
    {
        $this->usbc = $usbc;
    }

    /**
     * @return mixed
     */
    public function getHdmi()
    {
        return $this->hdmi;
    }

    /**
     * @param mixed $hdmi
     */
    public function setHdmi($hdmi): void
    {
        $this->hdmi = $hdmi;
    }

    /**
     * @return mixed
     */
    public function getVga()
    {
        return $this->vga;
    }

    /**
     * @param mixed $vga
     */
    public function setVga($vga): void
    {
        $this->vga = $vga;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param mixed $display
     */
    public function setDisplay($display): void
    {
        $this->display = $display;
    }

    /**
     * @return mixed
     */
    public function getRj45()
    {
        return $this->rj45;
    }

    /**
     * @param mixed $rj45
     */
    public function setRj45($rj45): void
    {
        $this->rj45 = $rj45;
    }

    /**
     * @return mixed
     */
    public function getFullhalgato()
    {
        return $this->fullhalgato;
    }

    /**
     * @param mixed $fullhalgato
     */
    public function setFullhalgato($fullhalgato): void
    {
        $this->fullhalgato = $fullhalgato;
    }

    /**
     * @return mixed
     */
    public function getMikrofon()
    {
        return $this->mikrofon;
    }

    /**
     * @param mixed $mikrofon
     */
    public function setMikrofon($mikrofon): void
    {
        $this->mikrofon = $mikrofon;
    }

    /**
     * @return mixed
     */
    public function getHiba()
    {
        return $this->hiba;
    }

    /**
     * @param mixed $hiba
     */
    public function setHiba($hiba): void
    {
        $this->hiba = $hiba;
    }

    /**
     * @return mixed
     */
    public function getAr()
    {
        return $this->ar;
    }

    /**
     * @param mixed $ar
     */
    public function setAr($ar): void
    {
        $this->ar = $ar;
    }

    /**
     * @return mixed
     */
    public function getGarancia()
    {
        return $this->garancia;
    }

    /**
     * @param mixed $garancia
     */
    public function setGarancia($garancia): void
    {
        $this->garancia = $garancia;
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
    public function getOprendszer()
    {
        return $this->oprendszer;
    }

    /**
     * @param mixed $oprendszer
     */
    public function setOprendszer($oprendszer): void
    {
        $this->oprendszer = $oprendszer;
    }
    /**
     * @return mixed
     */
    public function getKeszlet()
    {
        return $this->keszlet;
    }

    /**
     * @param mixed $keszlet
     */
    public function setKeszlet($keszlet): void
    {
        $this->keszlet = $keszlet;
    }

/**
 * @return mixed
 */
public function getHattertar2()
{
    return $this->hattertar2;
}

/**
 * @param mixed $hattertar2
 */
public function setHattertar2($hattertar2): void
{
    $this->hattertar2 = $hattertar2;
}

    /**
     * @return mixed
     */
    public function getTar2()
    {
        return $this->tar2;
    }

    /**
     * @param mixed $tar2
     */
    public function setTar2($tar2): void
    {
        $this->tar2 = $tar2;
    }
    private $tarmeret2;

    /**
     * @return mixed
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * @param mixed $slot
     */
    public function setSlot($slot): void
    {
        $this->slot = $slot;
    }

    /**
     * @return mixed
     */
    public function getDdr2()
    {
        return $this->ddr2;
    }

    /**
     * @param mixed $ddr2
     */
    public function setDdr2($ddr2): void
    {
        $this->ddr2 = $ddr2;
    }

    /**
     * @return mixed
     */
    public function getDvid()
    {
        return $this->dvid;
    }

    /**
     * @param mixed $dvid
     */
    public function setDvid($dvid): void
    {
        $this->dvid = $dvid;
    }

    /**
     * @return mixed
     */
    public function getGyarto()
    {
        return $this->gyarto;
    }

    /**
     * @param mixed $gyarto
     */
    public function setGyarto($gyarto): void
    {
        $this->gyarto = $gyarto;
    }


}


