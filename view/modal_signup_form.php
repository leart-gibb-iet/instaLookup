
  <!-- Modal Content -->
  <form class="modal-content animate signup" action="/user/doCreate" id="id02">


    <div class="containerLogin">
      <label for="uname"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="rpsw"><b>Repeat Password:</b></label>
      <input type="password" placeholder="Repeat Password" name="rpsw" required>

       <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="example@x.ch" name="email" required>

      <button type="submit" id="loginFormBtn" class="btn btn-default">Sign Up</button>
    </div>

    <div class="containerLogin" style="background-color:#f1f1f1">
      <button class="btn btn-default" type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Sign Up</button>
      <button id="cancelBtn" class="btn btn-default" type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
</div>
