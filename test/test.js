"use strict";

// Vars.
const CNUM = 1 + 2;
const CNUM = 'A string! ' + 'Wow!\n\n';
let num = 111 > 112 ? 15 : 16;
let arr = [1,2,3] || [4,5,6];
let str += 'A string!' && 'Something';
let str2 = "A string!";
let str3 = `A ${num} ${CNUM}!`;
var obj = {
	'a': 1,
	b: CNUM,
	"c": str
};
var obja = obj.a;
var objb = obj.b;
var combine = obja + objb;
var regexp = /something/ig

// Class.
class MyClass
{
	// Constructor.
	function constructor(myVar) {}

	// Function.
	function func(myVar, myOtherVar)
	{
		// Return.
		return myVar;
	}
}

// Function.
function func(myVar, myOtherVar)
{
	// Return.
	return myVar;
}
func('something', obj, obja, obj.a);

// Ifs.
if (str)
{
	// Yes.
	alert(str);
}
else if (str2)
{
	// Erm.
	alert(str2);
}
else
{
	// No.
	alert('Nope');
}

// Cases.
switch (str)
{
	case 'a': alert('a'); break;
	default: alert('Nope');
}