<!-- Nama : M AL FAIZ PUTRA JALASENANDRA - NIM: 21091397072 -->
<!-- Prodi: D4 Manajemen Informatika - 2021 B-->
<!-- Soal NO 1 Praktikum 5 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body style="align-items: center;">
    <div class="container">
        <h2>Prak 5 no 1</h2>

        <?php
class Pegawai
{
	public $nama;
	public	function __construct($nama)
	{
		$this->nama = $nama;
	}
	public	function getNama()
	{
		return $this->nama;
	}
}
class Manajer extends Pegawai
{
	public $tunjangan;
	public	function __construct($nama, $tunjangan)
	{
		parent::__construct($nama);
		$this->tunjangan = $tunjangan;
	}
	public	function getTunjangan()
	{
		return $this->tunjangan;
	}
}
class Kurir extends Pegawai
{
	public $gaji;

    public	function __construct($nama, $gaji)
	{
		parent::__construct($nama);

		$this->gaji = $gaji;

	}
	public	function getGaji()
	{
		return $this->gaji;
	}
}
class Soal1
{
	public static
	function Proses($peg)
	{
		if ($peg instanceof Manajer)
		{
			$man = $peg;
			echo "<br>Nama manajer: ".$man->nama, "\n";
			echo "<br>Tunjangan: Rp. ".strval($man->tunjangan), "\n";
		}
		else if ($peg instanceof Kurir)
		{
			$kur =  $peg;
			echo "<br>Nama kurir: ".$kur->nama, "\n";
			echo "<br>Gaji: Rp. ".strval($kur->gaji), "\n";
		}
	}
	public static
	function main($args)
	{
		echo "M AL FAIZ PUTRA JALASENANDRA - 21091397072", "\n"; 
        echo "<br>", "<br>";
		$peg1 = new Manajer("WOWOK", 9000000); 
		Soal1::Proses($peg1);
        echo "<br>", "<br>";
		$peg2 = new Kurir("NANDRA", 200000); 
		Soal1::Proses($peg2);
	}
}
Soal1::main(array());
?>
   
    </div>
</body>
</html>