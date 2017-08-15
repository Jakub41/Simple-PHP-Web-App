<footer class="page-footer white">
      <h4 style="color: white; padding: 3%" class="center light-blue  contact_text">Contact Us</h4>

    <div class="container">
      <div class="row" >
      <form id="form" > 
        <div class="input-field col s6">
          <input id="name" type="text" name="name" class="validate" required="required">
          <label for="name" class="name"> Name</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" name="email" class="validate" required="required">
          <label for="email" class="email">Email</label>
        </div>
        <div class="input-field col s12">
          <textarea id="textarea1" name="message" class="materialize-textarea" required="required"></textarea>
          <label for="textarea1" class="message">Message</label>
        </div>
        <div class="input-field col s12">
          <select  >
            <option value="" disabled selected id="choose">Choose your option</option>
            <option value="facebook" id="facebook">Facebook</option>
            <option value="google" id="google">Google</option>
          </select>
          <label id="where">Where Do You Guys Heard? </label>
        </div>
        <div class=" col s12" id="#">
          <label for="" id="gender">Select Gender</label>
        
            <p>
              <input name="gender" checked="checked" type="radio" id="test1" value="male" />
              <label for="test1" id="male">Male</label>
            </p>
            <p>
              <input name="gender" type="radio" id="test2" value="female" />
              <label for="test2" id="female">Female</label>
            </p>
        </div>

        <div>
          <button class="btn waves-effect waves-light light-blue right submit" type="submit" >Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
      </form>
    </div>
    <div class="footer-copyright light-blue">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://#">JL</a>

      </div>
    </div>
  </footer>
  <script>
    $(function() {
		    $("#form").submit(function(e) {
		        e.preventDefault();
		        console.log("Adasd");
		        var name = $("#name").val();
		        var email = $("#email").val();
		        var message = $("#textarea1").val();
		        var choose = $("#choose").val();
		        var gender = $("input[name='gender']:checked").val();
		        if (name == "") {
		            Materialize.toast('Please Fill The Name Field', 4000);
		        } else if (email == "") {
		            Materialize.toast('Please Fill The Email Field', 4000)
		        } else if (message == "") {
		            Materialize.toast('Please Fill The Message Field', 4000)
		        } else {
		            var dataString = 'name=' + name + '&email=' + email + '&message=' + message + '&choose=' + choose + '&gender=' + gender;
		            $.ajax({
		                type: "POST",
		                url: "form.php",
		                data: dataString,
		                success: function() {
		                    Materialize.toast('Thank You For Your Interest.Your Email Has Been Send', 1000)
		                    $('#form')[0].reset();
		                }
		            });
		        }
		    });
		});
  </script>