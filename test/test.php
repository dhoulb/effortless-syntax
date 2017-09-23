<?php $something; ?><h1>Hi!</h1><?php $this

	// Vars.
	const NUM = 111;
	const STR = 'A string! ' . "Wow!\r\n";
	$num = 111 > 112 ? 15 : 16;
	$str = 'A string!' | 'Something';
	$str .= " A $num!" && 'Something';
	$arr = [1,2,3] OR [4,5,6];
	$obj = [
		'a' => 1,
		'b' => $str,
		"c" => STR,
		'd' => 'd'
	];
	$obja = $obj['a'];
	$objb = $obj['b'];

	// Class.
	class MyClass extends Something
	{
		// Constructor.
		function constructor(string $var) {}

		/**
		 * Function
		 *
		 * @param mixed $var Something known.
		 * @return string Something new.
		 */
		function func($var)
		{
			// Return.
			return $var;
		}
	}

	// New.
	$myclass = new MyClass($var);

	// Function.
	function func($var,$test)
	{
		// Return.
		return $var;
	}

	// Loop.
	foreach ($arr as $key => $name) if (strlen($name)) func('something');

	// Ifs.
	if ($str)
	{
		// Yes.
		echo $str;
	}
	elseif ($str2)
	{
		// Erm.
		echo $str2;
	}
	else
	{
		// No.
		echo 'Nope';
	}

	// Alternate style.
	foreach ($str as $s):
		echo $s;
	endforeach;

	// Cases.
	switch ($str)
	{
		case 'a': alert('a'); break;
		default: alert('Nope');
	}
?>
<div id="myblock" checked lang="" class="something" style="background: red;">Div &amp; Lock</div>