<div class="InstagramSearchBox">

    <!-- Instagram Search Form -->
    <form class="form-inline" onsubmit="return false;">
        <div class="form-group">
            <label for="userName"></label>
            <input type="text" class="form-control" id="userName" placeholder="Enter Instagram Username">
            <button type="button" id="showImageButton" <?php if(!isset($_SESSION["IsLoggedIn"]) || $_SESSION["IsLoggedIn"] == false || empty($_SESSION["IsLoggedIn"])) {echo "disabled"; } ?> class="btn btn-default">Show Image</button>
           
        </div>
    </form>





    <!-- Error Message below the Searchform -->
    <div id="errorMessageBox" class="alert alert-danger" role="alert"></div>

    <!-- Instagram-Image which is gonna show -->
    <div id="imageContainer">
        <img id="profileImageContainer">
    </div>

  </div>
