<?php
class kalculator
{
	public $bilangan_1;
	public $bilangan_2;
	function utama($op){
		if($op=="tambah")
	$hasilnya = $this->tambah();
		elseif($op=="kurang")
		$hasilnya = $thish->kurang();
		elseif($op=="kali")
		$hasilnya = $this->kali();
		elseif($op=="bagi")
		$hasilnya = $this->bagi();
	echo $hasilnya;
	}
	
	function tambah()
	{
		$hasil=$this->bilangan_1 + $this->bilangan_2;
		return $hasil;
	
	}
	
	
	function kurang()
	{
		$hasil=$this->bilangan_1 - $this->bilangan_2;
		return $hasil;
	}
	
	
		function kali()
	{
		$hasil=$this->bilangan_1 * $this->bilangan_2;
		return $hasil;
	}
		function bagi()
	{
		$hasil=$this->bilangan_1 / $this->bilangan_2;
		return $hasil;
	}


}
?>