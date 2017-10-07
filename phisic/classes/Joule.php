<?php 
require '../config/config.php';

class Joule {
	protected $kellogramm;
	protected $metr;
	protected $second;

	public function __construct($KelloGram1, $Metr, $Second)	{
		$this->kellogramm = $KelloGram1;
		$this->metr = $Metr;
		$this->second = $Second;
	}

	public function Value() {
		echo 'Работа, энергия, количество теплоты';
	}

	public function Joule($amount = 1) {
		for ($i=0; $i < $amount; $i++) { 
			yield ($this->kellogramm * ($this->metr ** 2 / $this->second ** 2));
		}
	}

	public function WorldNames() {
		echo 'русское обозначение: Дж; международное: J';
	}

	public function Formula() {
		echo '1 Дж = 1 Н·м=1 кг·м²/с²';
	}

}

