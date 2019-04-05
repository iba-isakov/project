
<?php
require_once("SomethingRestHandler.php");
        
if(isset($_GET["num_to_str"]))
{
    $something=new SomethingRestHandler();
	$something->Num2Str($_GET['num_to_str']);
}
if(isset($_GET["Quad"]))
{
	
    $something=new SomethingRestHandler();
	$something->Quad($_GET['a'],$_GET['b'],$_GET['c']);
}
if(isset($_GET["date"]))
{
    $something=new SomethingRestHandler();
	$something->dayOfWeek($_GET['date']);
}
if(isset($_GET["fib_number"]))
{
    $something=new SomethingRestHandler();
	$something->fibonacci($_GET['fib_number']);
}
if(isset($_GET["region"]))
{
    $something=new SomethingRestHandler();
	$something->region($_GET['region']);
}
//http://localhost/6semestr/1lab_api/something?num_to_str=22
?>