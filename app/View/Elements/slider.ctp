<link rel="stylesheet" href="./app/webroot/css/bjqs.css">	   
<link rel="stylesheet" href="./app/webroot/css/demo.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="./app/webroot/js/bjqs-1.3.min.js"></script>
<script src="./app/webroot/js/popup.js"></script>
<div id="banner-slide">
    <ul class="bjqs">
      <li><img src="img/slide_one.png" title=""></li>
      <li><img src="img/slide_three.png" title=""></li>
      <li><img src="img/slide_five.png" title=""></li>

    </ul>
  <script>
    jQuery(document).ready(function($) {
      
      $('#banner-slide').bjqs({
        animtype      : 'slide',
        height        : 420,
        width         : 970,
        responsive    : true,
        randomstart   : true
      });
      
    });
  </script>
</div>