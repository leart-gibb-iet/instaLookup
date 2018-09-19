
<div id="id02" class="modal">
  <!-- Modal Content -->
  <form class="modal-content animate signup" action="/user/doCreate" method='post'>

    <!-- Sign Up Formular -->
    <div class="containerLogin">
      
      <label for="username"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password:</b></label>
      <input class="pwd" type="password" placeholder="Enter Password" name="password" required>

      <label for="repeat_password"><b>Repeat Password:</b></label>
      <input  class="pwd" type="password" placeholder="Repeat Password" name="repeat_password" required>
            <div id="validatePwd">Password is incorrect!</div>
      <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="example@x.ch" name="email" required>

      <button type="submit" id="formBtn" class="btn btn-default">Sign Up</button>
    </div>
    <!-- Cancel Button -->
    <div class="containerLogin" style="background-color:#f1f1f1">
      <button  class="btn btn-default cancelbtn" type="button"  onclick="document.getElementById('id02').style.display='none'">Cancel</button>
    </div>
  </form>
</div>
</div>
</div>
