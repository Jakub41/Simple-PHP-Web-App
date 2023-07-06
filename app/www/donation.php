<!-- Include head -->
<?php include 'head.php'; ?>

<!-- include file Language File -->
<?php include 'form.php'; ?>

<!-- include file Connection File -->
<?php include 'nav.php'; ?> 

<div class="container">
	<div class="col s12">
		<h4 class="center donate_text" style="color:#03a9f4; margin-top: 20%">Donate</h4>
		 <form action="#">
		    <label id="d_text">Select The Amount to Donate</label>
		    
		    <p class="range-field">
		      <input type="range" id="test5" min="0" max="10000" />
		    </p>
		    <button class="btn waves-effect waves-light light-blue right submit donate_text" type="button" >Donate
            <i class="material-icons right">send</i>
          </button>
		  </form>
	</div>
</div>

<script type="text/javascript">
	$(function() {
  $(".submit").click(function() {
   Materialize.toast('Thank You For Your Donations', 1000)
});
});
</script>

</body>
</html>