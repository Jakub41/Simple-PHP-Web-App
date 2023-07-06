<!-- Include head -->
<?php include 'head.php'; ?>

<!-- include file nav File -->
<?php include 'nav.php'; ?> 

<!-- include file Connection File -->
<?php include 'connection.php'; ?>

<!-- include file Table File -->
<?php include 'table.php'; ?>

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