<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class HammerPick extends TypeNormal {
	public function build() {
		$this->name = "hammer pick";
		$this->graphic = 0x143D;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0;
		$this->aosstrengthreq = 45;
		$this->aosmindamage = 15;
		$this->aosmaxdamage = 17;
		$this->aosspeed = 28;
		$this->mlspeed = 3;
		$this->oldstrengthreq = 35;
		$this->oldmindamage = 6;
		$this->oldspeed = 30;
		$this->defhitsound = 0;
		$this->defmisssound = 0;
		$this->hits = 31;
		$this->maxHits = 70;
		$this->weight = 9.0;

}}
?>
