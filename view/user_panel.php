      <!-- User Panel -->
      <div class="FormUserPanel">
              <form action="/user/doUserPanel" method="post">
              <br>
                <label for="email"> <b>Email:</b></label> <br>

                <input type="text" placeholder="New Email" name="email" required/><br>

                <label for="password"> <b>Password:</b></label> <br>
                <input class="pwd" type="password" placeholder="New Password" name="password" required /><br>

                <label for="password_required"> <b>Repeat password:</b></label> <br>
                <input class="pwd" type="password" placeholder="Repeat new Password" name="repeat_password" required /><br>
                <div id="validatePwd">Password is incorrect!</div>
                <input class="btn btn-default" id="formBtn" type="submit" value="Change" name="Change" />
                
                <button class="btn btn-default" onclick="document.getElementById('id03').style.display='block'" type="submit">Delete Account</button><br>
              </form>
            </div>

       
<!-- The Modal -->
<div id="id03" class="modal">
 
 <!-- Modal Content -->
 <form class="modal-content animate" action="/user/doDeleteAccount" method="post">

 <!-- Login Formular -->
   <div class="containerLogin">
    
     <label for="password"><b>Enter your password to confirm deleting:</b></label>
     <input type="password" placeholder="Enter Password" name="password" required>

     <button type="submit" class="btn btn-default">Confirm</button>
     <button type="submit" style="float: right" onclick="document.getElementById('id03').style.display='none'" class="btn btn-default">Cancel</button>

   </div>

  
 </form>
</div>     