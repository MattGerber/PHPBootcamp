<?php

include_once('UnholyFactory.class.php');
include_once('Fighter.class.php');

class Footsoldier extends Fighter {
	public function __construct() {
		parent::__construct("foot soldier");
	}

	public function fight($target) {
		print ("* draws his sword and runs towards " . $target . " *" . PHP_EOL);
	}
}

class Archer extends Fighter {
	public function __construct() {
		parent::__construct("archer");
	}

	public function fight($target) {
		print ("* shoots arrows at " . $target . " *" . PHP_EOL);
	}
}

class Assassin extends Fighter {
	public function __construct() {
		parent::__construct("assassin");
	}

	public function fight($target) {
		print ("* creeps behind " . $target . " and stabs at it *" . PHP_EOL);
	}
}

class Llama {
	public function fight($target) {
		print ("* spits at " . $target . " *" . PHP_EOL);
	}
}

$uf = new UnholyFactory();
$uf->absorb(new Footsoldier());
$uf->absorb(new Footsoldier());
$uf->absorb(new Archer());
$uf->absorb(new Assassin());
$uf->absorb(new Llama());

$requested_fighters = Array(
	"foot soldier",
	"llama",
	"foot soldier",
	"archer",
	"foot soldier",
	"assassin",
	"foot soldier",
	"archer",
);

$actual_fighters = Array(
);

foreach ($requested_fighters as $rf) {
	$f = $uf->fabricate($rf);
	if ($f != null) {
		array_push($actual_fighters, $f);
	}
}

$targets = Array("the Hound", "Tyrion", "Podrick");

foreach ($actual_fighters as $f) {
	foreach ($targets as $t) {
		$f->fight($t);
	}
}
// $> php -f test1.php
// (Factory absorbed a fighter of type foot soldier)
// (Factory already absorbed a fighter of type foot soldier)
// (Factory absorbed a fighter of type archer)
// (Factory absorbed a fighter of type assassin)
// (Factory can't absorb this, it's not a fighter)
// (Factory fabricates a fighter of type foot soldier)
// (Factory hasn't absorbed any fighter of type llama)
// (Factory fabricates a fighter of type foot soldier)
// (Factory fabricates a fighter of type archer)
// (Factory fabricates a fighter of type foot soldier)
// (Factory fabricates a fighter of type assassin)
// (Factory fabricates a fighter of type foot soldier)
// (Factory fabricates a fighter of type archer)
// * draws his sword and runs towards the Hound *
// * draws his sword and runs towards Tyrion *
// * draws his sword and runs towards Podrick *
// * draws his sword and runs towards the Hound *
// * draws his sword and runs towards Tyrion *
// * draws his sword and runs towards Podrick *
// * shoots arrows at the Hound *
// * shoots arrows at Tyrion *
// * shoots arrows at Podrick *
// * draws his sword and runs towards the Hound *
// * draws his sword and runs towards Tyrion *
// * draws his sword and runs towards Podrick *
// * creeps behind the Hound and stabs at it *
// * creeps behind Tyrion and stabs at it *
// * creeps behind Podrick and stabs at it *
// * draws his sword and runs towards the Hound *
// * draws his sword and runs towards Tyrion *
// * draws his sword and runs towards Podrick *
// * shoots arrows at the Hound *
// * shoots arrows at Tyrion *
// * shoots arrows at Podrick *