<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation(); ?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
	
<?php
$round = round(4.5);
echo "round of 4.5 is $round<br>";
$helloWorld = strtolower('Hello World!');
echo $helloWorld . '<br>';
$myArr = [1, 2, 3, 4, 5];
echo 'Min of [1, 2, 3, 4, 5] is ' . min($myArr) . '<br>';
?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
