<?php

namespace app\model;
use db\Database;
use PDO;

class Laptop
{
    private $id;
private $gyarto;
private $nev;
private $processor;
private $memoria;
private $memoria2;
private $processorgyujto;
private $ddr;
private $ddrertek;
private $ddr2;
private $slot;
private $videokartya;
private $kijelzomeret;
private $felbontasszelesseg;
private $felbontasmagassag;
private $tipus;
private $tar;
private $tarmeret;
private $tar2;
private $tarmeret2;
private $oprendszer;
private $optikaimeghajto;
private $usba;
private $usbc;
private $vga;
private $dvid;
private $hdmi;
private $display;
private $rj45;
private $fullhalgato;
private $mikrofon;
private $garancia;
private $hiba;
private $keszlet;
private $ar;
private $hattertar;
private $hattertar2;
private $hattertar1;
private $fullhallgato;
    private $betu;
    private $processortipus;
    /**
     * @var string[]
     */
    private $loadable;
    private $kep;

    public static  function findAll()
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM laptop";
        $statement = $conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS,self::class);
    }


    public function ProcMemoSet()
    {

        if($_POST['intel']=="on")
        {

            $this->processor = $this->processorgyujto." ".$this->processortipus.$this->betu;


        }
        else {
            $this->processor=$_POST["processor"]." ".$this->processorgyujto;


        }

        $this->memoria=$this->ddrertek." ". $this->ddr;
        $this->memoria2= $this->slot. " ".$this->ddr2 ;
        $this->hattertar=$this->tarmeret. $this->tar;
        $this->hattertar2=$this->tarmeret2.$this->tar2;

    }



    public static function findOneById($id)
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM laptop WHERE id = :id";
        $statement = $conn->prepare($sql);
        $statement->execute([
            ':id' => $id,
        ]);
        return $statement->fetchObject(self::class);
    }

    public function Insert()
    {
        $db = Database::getConnection();

        $this->ProcMemoSet();


        $statement = $db->prepare(Sqlfiles::laptopinsert());
        $result = $statement->execute([
            ':gyarto'=>$this->gyarto,
            ':nev' => $this->nev,
            ':processor' => $this->processor,
            ':memoria' => $this->memoria,
            ':memoria2'=>$this->memoria2,
            ':videokartya' => $this->videokartya,
            ':kijelzomeret'=>$this->kijelzomeret,
            ':felbontasszelesseg'=>$this->felbontasszelesseg,
            ':felbontasmagassag'=>$this->felbontasmagassag,
            ':tipus'=>$this->tipus,
            ':hattertar1' => $this->hattertar,
            ':hattertar2'=>$this->hattertar2,
            ':optikaimeghajto' => $this->optikaimeghajto,
            ':usba' => $this->usba,
            ':usbc'=>$this->usbc,
            ':hdmi'=>$this->hdmi,
            ':vga'=>$this->vga,
            ':dvid'=>$this->dvid,
            ':display'=>$this->display,
            ':rj45'=>$this->rj45,
            ':fullhallgato'=>$this->fullhalgato,
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

    

    public function load($data)
    {

        $valid=new laptopvalidal();

        $this->loadable=$valid->createLoadable();

        foreach ($this->loadable as $item) {
            if ('' != $data[$item]||$data[$item]!="on") {
                $this->$item = $data[$item];

            }
        }

    }

    /**
     * @return mixed
     */
    public function getHattertar1()
    {
        return $this->hattertar1;
    }

    /**
     * @param mixed $hattertar1
     */
    public function setHattertar1($hattertar1): void
    {
        $this->hattertar1 = $hattertar1;
    }

    /**
     * @return mixed
     */
    public function getFullhallgato()
    {
        return $this->fullhallgato;
    }

    /**
     * @param mixed $fullhallgato
     */
    public function setFullhallgato($fullhallgato): void
    {
        $this->fullhallgato = $fullhallgato;
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
    public function getProcessorgyujto()
    {
        return $this->processorgyujto;
    }

    /**
     * @param mixed $processorgyujto
     */
    public function setProcessorgyujto($processorgyujto): void
    {
        $this->processorgyujto = $processorgyujto;
    }

    /**
     * @return mixed
     */
    public function getDdr()
    {
        return $this->ddr;
    }

    /**
     * @param mixed $ddr
     */
    public function setDdr($ddr): void
    {
        $this->ddr = $ddr;
    }

    /**
     * @return mixed
     */
    public function getDdrertek()
    {
        return $this->ddrertek;
    }

    /**
     * @param mixed $ddrertek
     */
    public function setDdrertek($ddrertek): void
    {
        $this->ddrertek = $ddrertek;
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
    public function getKijelzomeret()
    {
        return $this->kijelzomeret;
    }

    /**
     * @param mixed $kijelzomeret
     */
    public function setKijelzomeret($kijelzomeret): void
    {
        $this->kijelzomeret = $kijelzomeret;
    }

    /**
     * @return mixed
     */
    public function getFelbontasszelesseg()
    {
        return $this->felbontasszelesseg;
    }

    /**
     * @param mixed $felbontasszelesseg
     */
    public function setFelbontasszelesseg($felbontasszelesseg): void
    {
        $this->felbontasszelesseg = $felbontasszelesseg;
    }

    /**
     * @return mixed
     */
    public function getFelbontasmagassag()
    {
        return $this->felbontasmagassag;
    }

    /**
     * @param mixed $felbontasmagassag
     */
    public function setFelbontasmagassag($felbontasmagassag): void
    {
        $this->felbontasmagassag = $felbontasmagassag;
    }

    /**
     * @return mixed
     */
    public function getTipus()
    {
        return $this->tipus;
    }

    /**
     * @param mixed $tipus
     */
    public function setTipus($tipus): void
    {
        $this->tipus = $tipus;
    }

    /**
     * @return mixed
     */
    public function getTar()
    {
        return $this->tar;
    }

    /**
     * @param mixed $tar
     */
    public function setTar($tar): void
    {
        $this->tar = $tar;
    }

    /**
     * @return mixed
     */
    public function getTarmeret()
    {
        return $this->tarmeret;
    }

    /**
     * @param mixed $tarmeret
     */
    public function setTarmeret($tarmeret): void
    {
        $this->tarmeret = $tarmeret;
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

    /**
     * @return mixed
     */
    public function getTarmeret2()
    {
        return $this->tarmeret2;
    }

    /**
     * @param mixed $tarmeret2
     */
    public function setTarmeret2($tarmeret2): void
    {
        $this->tarmeret2 = $tarmeret2;
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
    public function getMemoria2()
    {
        return $this->memoria2;
    }

    /**
     * @param mixed $memoria2
     */
    public function setMemoria2($memoria2): void
    {
        $this->memoria2 = $memoria2;
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
    public function getBetu()
    {
        return $this->betu;
    }

    /**
     * @param mixed $betu
     */
    public function setBetu($betu): void
    {
        $this->betu = $betu;
    }

    /**
     * @return mixed
     */
    public function getProcessortipus()
    {
        return $this->processortipus;
    }

    /**
     * @param mixed $processortipus
     */
    public function setProcessortipus($processortipus): void
    {
        $this->processortipus = $processortipus;
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



}
