<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class BoneGloves extends TypeNormal {
	public function build() {
		$this->name = "bone gloves";
		$this->graphic = 0x1450;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0;
		$this->aosstrengthreq = 0;
		$this->aosmindamage = 0;
		$this->aosmaxdamage = 0;
		$this->aosspeed = 0;
		$this->mlspeed = 0;
		$this->oldstrengthreq = 0;
		$this->oldmindamage = 0;
		$this->oldspeed = 0;
		$this->defhitsound = 0;
		$this->defmisssound = 0;
		$this->hits = 25;
		$this->maxHits = 30;
		$this->weight = 2.0;

}}
?>
