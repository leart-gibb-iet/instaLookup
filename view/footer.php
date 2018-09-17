        <hr>
        <footer>
          <p>&copy; instaLookup</p>
        </footer>
    </div>
    <!-- jQuery & Bootstrap scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
  
    <?php  

    // include Js files, Js can be included in the Controller
    if(isset($javascripts))
    {
        foreach($javascripts as $script) 
        {
         echo '<script src="js/'.$script.'"></script>';
         echo "\n";
        }
    }
    ?>
  
  </body>
</html>
