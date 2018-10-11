<?php
class Tyrion
{
	public function sleepWith($name)
	{
		if ($name instanceof Jaime || $name instanceof Cersei)
		{
			echo "Not even if I'm drunk !"."\n";
		}
		else if ($name instanceof Sansa)
		{
			echo "Let's do this."."\n";
		}
		return;
	}
}
?>