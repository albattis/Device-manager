<?php

namespace app\model;

use db\Database;
use PDO;

class Monitor
{

    private $id;
    private $gyarto;
    private $nev;
    private $tipus;
    private $kijelzo;
    private $felbontasszelesseg;
    private $felbontasmagassag;
    private $pix;
    private $frissitesiido;
    private $maxfogyasztas;
    private $kep_frissites;
    private $usba;
    private $usbc;
    private $vga;
    private $hdmi;
    private $dvid;
    private $display;
    private $fullhalgato;
    private $mikrofon;
    private $kep;
    private $files;
    private $garancia;
    private $hiba;
    private $keszlet;
    private $ar;
    private $felbontas;
    private $loadable;
    private $szelesseg;
    private $magassag;
    private $melyseg;
    private $suly;
    private $errors;
    private $keparany;
    private $pixel_meret;
    private $frissitesi_ido;
    private $max_fogyasztas;
    private $display_port;
    private $fullhallgato;
    private $hibak;
    private $hangszoro;
    private $kepfrissites;


    public function felbontas()
    {


        $this->felbontas = $_POST["felbontasszelesseg"] . " x " . $_POST["felbontasmagassag"];

    }

    public function phisyc()
    {
    if(!empty($_POST["inchszelesseg"]))
        {
        $this->szelesseg=$_POST["szelesseg"]*2.54;
        }
    if(!empty($_POST["metrikszelesseg"]))

        {
            $this->szelesseg=$_POST["szelesseg"];
        }
    if(!empty($_POST["inchmagassag"]))
        {
            $this->magassag=$_POST["magassag"]*2.54;
        }
    if(!empty($_POST["metrikmagassag"]))
        {
        $this->magassag=$_POST["magassag"];
        }
        if(!empty($_POST["inchmelyseg"]))
        {
            $this->melyseg=$_POST["melyseg"]*2.54;
        }
        if(!empty($_POST["metrikmelyseg"]))

        {
            $this->melyseg=$_POST["melyseg"];
        }

        if(!empty($_POST["sulylbs"]))
        {
            $this->suly=$_POST["suly"]*0.54;
        }
        if(!empty($_POST["sulykg"]))

        {
            $this->suly=$_POST["suly"];
        }


    }


    public function load($data)
    {

        $valid = new validalMonitor();

        $this->loadable = $valid->createLoadable();
var_dump($data);
print_r($_POST);
        foreach ($this->loadable as $item) {
            if (!is_null($data[$item])) {
                if ('' != $data[$item] || $data[$item] != "on") {
                    $this->$item = $data[$item];
                }
            }

        }
    }


    public static function findAll()
    {
        $conn = Database::getConnection();
        $sql = Sqlfiles::MonitorAll();
        $statement = $conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function findOneById($id)
    {
        $conn = Database::getConnection();
        $sql = Sqlfiles::MonitorfindOneById();
        $statement = $conn->prepare($sql);
        $statement->execute([
            ':id' => $id,
        ]);
        return $statement->fetchObject(self::class);
    }


    public function insert()
    {
            $this->felbontas();
    $this->phisyc();
            $db = Database::getConnection();

            $statement = $db->prepare(Sqlfiles::insertMonitor());

            $result = $statement->execute([
                ':gyarto'=>$this->gyarto,
                ':nev'=> $this->nev,
                ':tipus'=>$this->tipus,
                ':keparany'=>$this->kijelzo,
                ':felbontas'=>$this->felbontas,
                ':pixelmeret'=>$this->pix,
                ':frissitesiido'=>$this->frissitesiido,
                ':maxfogyasztas'=>$this->maxfogyasztas,
                ':kepfrissites'=>$this->kepfrissites,
                ':szelesseg'=>$this->szelesseg,
                ':magassag'=>$this->magassag,
                ':melyseg'=>$this->melyseg,
                ':suly'=>$this->suly,
                ':usba'=>$this->usba,
                ':usbc'=>$this->usbc,
                ':vga'=>$this->vga,
                ':hdmi'=>$this->hdmi,
                ':dvid'=>$this->dvid,
                ':display'=>$this->display,
                ':fullhalgato'=>$this->fullhalgato,
                ':mikrofon'=>$this->mikrofon,
                ':kep'=>$this->kep,
                ':garancia'=>$this->garancia,
                ':keszlet'=>$this->keszlet,
                ':hibak'=>$this->hiba,
                ':ar'=>$this->ar

            ]);



            if(false == $result)
            {
                $this->errors ['saveError'] = 'Sikertelen mentés';
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
    public function getKijelzo()
    {
        return $this->kijelzo;
    }

    /**
     * @param mixed $kijelzo
     */
    public function setKijelzo($kijelzo): void
    {
        $this->kijelzo = $kijelzo;
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
    public function getPix()
    {
        return $this->pix;
    }

    /**
     * @param mixed $pix
     */
    public function setPix($pix): void
    {
        $this->pix = $pix;
    }

    /**
     * @return mixed
     */
    public function getFrissitesiido()
    {
        return $this->frissitesiido;
    }

    /**
     * @param mixed $frissitesiido
     */
    public function setFrissitesiido($frissitesiido): void
    {
        $this->frissitesiido = $frissitesiido;
    }

    /**
     * @return mixed
     */
    public function getMaxfogyasztas()
    {
        return $this->maxfogyasztas;
    }

    /**
     * @param mixed $maxfogyasztas
     */
    public function setMaxfogyasztas($maxfogyasztas): void
    {
        $this->maxfogyasztas = $maxfogyasztas;
    }

    /**
     * @return mixed
     */
    public function getSzelesseginch()
    {
        return $this->szelesseginch;
    }

    /**
     * @param mixed $szelesseginch
     */
    public function setSzelesseginch($szelesseginch): void
    {
        $this->szelesseginch = $szelesseginch;
    }

    /**
     * @return mixed
     */
    public function getInchszelesseg()
    {
        return $this->inchszelesseg;
    }

    /**
     * @param mixed $inchszelesseg
     */
    public function setInchszelesseg($inchszelesseg): void
    {
        $this->inchszelesseg = $inchszelesseg;
    }

    /**
     * @return mixed
     */
    public function getMagassaginch()
    {
        return $this->magassaginch;
    }

    /**
     * @param mixed $magassaginch
     */
    public function setMagassaginch($magassaginch): void
    {
        $this->magassaginch = $magassaginch;
    }

    /**
     * @return mixed
     */
    public function getInchmagassag()
    {
        return $this->inchmagassag;
    }

    /**
     * @param mixed $inchmagassag
     */
    public function setInchmagassag($inchmagassag): void
    {
        $this->inchmagassag = $inchmagassag;
    }

    /**
     * @return mixed
     */
    public function getMelyseginch()
    {
        return $this->melyseginch;
    }

    /**
     * @param mixed $melyseginch
     */
    public function setMelyseginch($melyseginch): void
    {
        $this->melyseginch = $melyseginch;
    }

    /**
     * @return mixed
     */
    public function getInchmelyseg()
    {
        return $this->inchmelyseg;
    }

    /**
     * @param mixed $inchmelyseg
     */
    public function setInchmelyseg($inchmelyseg): void
    {
        $this->inchmelyseg = $inchmelyseg;
    }

    /**
     * @return mixed
     */
    public function getSulyadat()
    {
        return $this->sulyadat;
    }

    /**
     * @param mixed $sulyadat
     */
    public function setSulyadat($sulyadat): void
    {
        $this->sulyadat = $sulyadat;
    }

    /**
     * @return mixed
     */
    public function getSulylbdvaltas()
    {
        return $this->sulylbdvaltas;
    }

    /**
     * @param mixed $sulylbdvaltas
     */
    public function setSulylbdvaltas($sulylbdvaltas): void
    {
        $this->sulylbdvaltas = $sulylbdvaltas;
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
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param mixed $files
     */
    public function setFiles($files): void
    {
        $this->files = $files;
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
    public function getFelbontas()
    {
        return $this->felbontas;
    }

    /**
     * @param mixed $felbontas
     */
    public function setFelbontas($felbontas): void
    {
        $this->felbontas = $felbontas;
    }

    /**
     * @return mixed
     */
    public function getSzelesseg()
    {
        return $this->szelesseg;
    }

    /**
     * @param mixed $szelesseg
     */
    public function setSzelesseg($szelesseg): void
    {
        $this->szelesseg = $szelesseg;
    }

    /**
     * @return mixed
     */
    public function getMagassag()
    {
        return $this->magassag;
    }

    /**
     * @param mixed $magassag
     */
    public function setMagassag($magassag): void
    {
        $this->magassag = $magassag;
    }

    /**
     * @return mixed
     */
    public function getMelyseg()
    {
        return $this->melyseg;
    }

    /**
     * @param mixed $melyseg
     */
    public function setMelyseg($melyseg): void
    {
        $this->melyseg = $melyseg;
    }

    /**
     * @return mixed
     */
    public function getSuly()
    {
        return $this->suly;
    }

    /**
     * @param mixed $suly
     */
    public function setSuly($suly): void
    {
        $this->suly = $suly;
    }

    /**
     * @return mixed
     */
    public function getKeparany()
    {
        return $this->keparany;
    }

    /**
     * @param mixed $keparany
     */
    public function setKeparany($keparany): void
    {
        $this->keparany = $keparany;
    }

    /**
     * @return mixed
     */
    public function getPixelMeret()
    {
        return $this->pixel_meret;
    }

    /**
     * @param mixed $pixel_meret
     */
    public function setPixelMeret($pixel_meret): void
    {
        $this->pixel_meret = $pixel_meret;
    }

    /**
     * @return mixed
     */
    public function getFrissitesi_Ido()
    {
        return $this->frissitesi_ido;
    }

    /**
     * @param mixed $frissitesi_ido
     */
    public function setFrissitesi_Ido($frissitesi_ido): void
    {
        $this->frissitesi_ido = $frissitesi_ido;
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
    public function getMax_Fogyasztas()
    {
        return $this->max_fogyasztas;
    }

    /**
     * @param mixed $max_fogyasztas
     */
    public function setMax_Fogyasztas($max_fogyasztas): void
    {
        $this->max_fogyasztas = $max_fogyasztas;
    }

    /**
     * @return mixed
     */
    public function getDisplayPort()
    {
        return $this->display_port;
    }

    /**
     * @param mixed $display_port
     */
    public function setDisplayPort($display_port): void
    {
        $this->display_port = $display_port;
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
    public function getHibak()
    {
        return $this->hibak;
    }

    /**
     * @param mixed $hibak
     */
    public function setHibak($hibak): void
    {
        $this->hibak = $hibak;
    }

    /**
     * @return mixed
     */
    public function getHangszoro()
    {
        return $this->hangszoro;
    }

    /**
     * @param mixed $hangszoro
     */
    public function setHangszoro($hangszoro): void
    {
        $this->hangszoro = $hangszoro;
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
    public function getKepFrissites()
    {
        return $this->kep_frissites;
    }

    /**
     * @param mixed $kep_frissites
     */
    public function setKepFrissites($kep_frissites): void
    {
        $this->kep_frissites = $kep_frissites;
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
