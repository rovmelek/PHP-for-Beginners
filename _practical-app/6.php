
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation(); ?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
    <?php if (isset($_POST['submit'])) {
      echo 'User input text is: ' . $_POST['textInput'];
    } ?>
    <form action="" method="post">
      <label for="textInput">Enter text:</label>
      <input type="text" id="textInput" name="textInput">
      <input name="submit" type="submit">
    </form>
</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
