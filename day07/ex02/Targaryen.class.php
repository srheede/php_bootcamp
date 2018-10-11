<?php
class Targaryen{
    public static $count = 0;
	public function getBurned()
	{
        if (self::$count == 0)
        {
            self::$count++;
            return 'burns alive';
        }
        return 'emerges naked but unharmed';
    }
}
?>