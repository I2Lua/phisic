<?php

class Newton {
	private $kellogramm;
	private $metr;
	private $second;
	private $amount;

	public function __construct($KelloGram1, $Metr, $Second, $Amount = 1)	{
		$this->kellogramm = $KelloGram1;
		$this->metr = $Metr;
		$this->second = $Second;
		$this->amount = $Amount;

		$this->Newton();
	}

	public function Newton() {
		echo "Ответ: ". (string) ($this->amount * 
			($this->kellogramm * ($this->metr / ($this->second ** 2))));
	}
}

class Newton_Function {
	
	public function AllVarNames() {
		echo 'Киллограмм, Метр, Секунды';
	}

	public function Value() {
		echo 'Сила';
	}


	public function WorldNames() {
		echo "русское обозначение: Н; международное: N";
	}


	public function Formula() {
		echo "1 Н = 1 кг·м/с2";
	}
}
