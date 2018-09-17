
<!-- The Modal -->
<div id="id01" class="modal">
 
  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
 

    <div class="containerLogin">
      <label for="uname"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" id="loginFormBtn" class="btn btn-default">Login</button>
    </div>

    <div class="containerLogin" style="background-color:#f1f1f1">
      <button class="btn btn-default cancelbtn" type="button" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
      <button class="btn btn-default signupbtn" type="button" id="signUpBtn">Sign Up!</button>
          
    </div>
  </form>
</div>