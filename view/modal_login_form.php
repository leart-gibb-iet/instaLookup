
<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
  <!--  <div class="imgcontainer">
      <img src="/images/user_icon.png" alt="Avatar" class="avatar">
    </div> -->

    <div class="container">
      <label for="uname"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" id="loginFormBtn" class="btn btn-default">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button class="btn btn-default" type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>