
<!-- The Modal -->
<div id="id01" class="modal">
 
  <!-- Modal Content -->
  <form class="modal-content animate" action="/user/doLogin" method="post">
 
  <!-- Login Formular -->
    <div class="containerLogin">
      <label for="username"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" id="loginFormBtn" name="login" class="btn btn-default">Login</button>
    </div>
    <div class="wrongPwd"><?php $msgPwd ?></div>
    <!-- Cancel Button & Sign Up Button -->
    <div class="containerLogin" style="background-color:#f1f1f1">
      <button class="btn btn-default cancelbtn" type="button" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
      <button class="btn btn-default signupbtn" type="button" id="signUpBtn">Sign Up!</button>
          
    </div>
  </form>
</div>