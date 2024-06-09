<?php
class Rental{
    public $member;
    public $tipe;
    public $waktu;
    public $diskon;
    protected $pajak;
    private $Scooter, $Vesmet, $Vario, $Aerox;
    private $listmem = ['ana', 'aca', 'ica', 'amber'];

    function __construct(){
        $this->pajak = 10000;
    }

    public function getMember(){
        if(in_array($this->member, $this->listmem)){
            return "member";
        }else{
            return "non-member";
        }
    }
    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4){
        $this->Scooter = $tipe1;
        $this->Vesmet = $tipe2;
        $this->Vario = $tipe3;
        $this->Aerox = $tipe4;
    }
    public function getHarga(){
        $rental["Scooter"] = $this-> Scooter;
        $rental["Vesmet"] = $this-> Vesmet;
        $rental["Vario"] = $this-> Vario;
        $rental["Aerox"] = $this-> Aerox;
        return $rental;
    }
}

class Motor extends Rental {
    public function hargaMotor(){
        $rentalHarga = $this->getHarga()[$this->tipe];
        $diskon = $this->getMember() == "member" ? 5 : 0;
        if($this->waktu === 1) {
            $bayar = ($setHarga - ($rentalHarga * $diskon / 100)) + $this->pajak;
        }else{
            $bayar = (($rentalHarga * $this->waktu) - ($rentalHarga * $diskon/100)) + $this->pajak;
        }
        return [$bayar, $diskon];
    }

    public function pembayaran(){
        echo "<center>";
        echo $this->member . " berstatus sebagai " . $this->getMember() . "mendapat diskon sebesar " .$this->hargaMotor()[1] . "%";
        echo "<br>";
        echo "jenis motor yang direntalkan berupa " . $this->tipe . " selama " . $this->waktu . "hari";
        echo "<br>";
        echo "Harga rental per-harinya : Rp" . number_format($this->getHarga()[$this->tipe], 0, '','.');
        echo "<br>";
        echo "Besar yang harus dibayarkan adalah Rp." . number_format($this->hargaMotor()[0], 0, '', '.');
        echo "</center>";
    }
}