<!-- Include head -->
<?php include 'head.php'; ?>

<!-- include file nav File -->
<?php include 'nav.php'; ?> 

<!-- include file Connection File -->
<?php include 'connection.php'; ?>

<!-- include file Slider -->
<?php include 'slider.php'; ?>

<!-- include file What -->
<?php include 'what.php'; ?> 

<!-- include file Footer -->
<?php include 'footer.php'; ?>

<!-- include file Language File -->
<?php include 'language.php'; ?>

<script type="text/javascript">
	
    $(document).ready(function(){
      $('.slider').slider({
      			height:500,
      			indicators:false
      		});
    });
    $(".button-collapse").sideNav();
      $(document).ready(function() {
    $('select').material_select();
  });
        
</script>
</body>
</html>