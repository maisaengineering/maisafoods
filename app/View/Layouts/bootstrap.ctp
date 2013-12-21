<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
    echo $this->Html->meta('icon');
		echo $this->Html->css('styles');
    echo $this->Html->css('bootstrap_and_overrides');
    echo $this->Html->script('jquery.slides.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

  </head>

  <body onload="checkCookie()">

  <?php echo $this->element('popup'); ?>
  
    <div class="container">

     <?php echo $this->element('header'); ?>

			<?php echo $this->fetch('content'); ?>

     <?php echo $this->element('footer'); ?> 

    </div>
  </body>
</html>

<script type="text/javascript">
var menu_type = document.URL.split('/');

if (menu_type[4] == "ProductsSub" || menu_type[4] == "Product1" || menu_type[4] == "Product2" || menu_type[4] == "InstantFood")
{
  document.getElementById('Products').style.backgroundColor="#EBB035";
}
else
{
  document.getElementById(menu_type[4]).style.backgroundColor="#EBB035";
}

</script>
