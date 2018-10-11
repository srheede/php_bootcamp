<?php

include('Targaryen.class.php');

class Viserys extends Targaryen {
	public function resistsFire() {
		return FALSE;
	}
}

class Daenerys extends Targaryen {
	public function resistsFire() {
		return True;
	}
}

$viserys = new Viserys();
$daenerys = new Daenerys();

print("Viserys " . $viserys->getBurned() . PHP_EOL);
print("Daenerys " . $daenerys->getBurned() . PHP_EOL);

?>
