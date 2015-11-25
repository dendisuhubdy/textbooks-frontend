    <div class="brief grid">

      <div class="centered grid__col--16">
        <blockquote>
          Just the knowledge that good book is awaiting one at the end of a long day makes the day happier
        </blockquote>
        <p><span>- Kathleen Norris</span></p>
      </div> <!-- end grid__col--16 -->
      <div class="grid__col--8 feet">
        <ul class="social">
          <li class="social__item social__item--t" ><a href="#" data-icon="&#xe614;"></a></li>
          <li class="social__item social__item--f" ><a href="#" data-icon="&#xe613;"></a></li>
          <li class="social__item social__item--g" ><a href="#" data-icon="&#xe612;"></a></li>
          <li class="social__item social__item--in"><a href="#" data-icon="&#xe618;"></a></li>
        </ul>
      </div>
      <div class="grid__col--10 feet">
        <h4 class="privacy"><a>Privacy</a> | <a>Terms</a> | <a>Copyright</a></h4>
      </div>
      <div class="grid__col--6 feet">
        <h4> &copy;<?php echo date('Y'); ?> <span class="site-title">Textbooks</span></h4>
      </div>

    </div> <!-- end .brief -->

    <div class="navbar" role="navigation">
      <div class="grid"> 
        <div class="nav">
          <ul class="nav-menu--mobile">
            <li class="nav-menu--mobile__item signIn">
              <p class="icn">Sign In</p>
            </li>
            <li class="nav-menu--mobile__item" id="">
              <form action="">
                <input id="search-box" type="text" class="search-box" name="q" placeholder="Search by Book Title, Author, or ISBN" />
                <button type="reset" class="search-close-toggle"></button>
                <input type="submit" id="search-submit" />
              </form>
            </li>
                  
          </ul>  
        </div>
        <ul class="nav">
          <li class="nav__item"><a rel="tab" href="index.php" class="content-link">Home</a></li>
          <li class="nav__item"><a rel="tab" href="library.php" class="content-link">Library</a></li>
          <li class="nav__item"><a rel="tab" href="profile.php" class="content-link">Profile</a></li>
        </ul>
      </div> <!-- end .grid -->
    </div> <!-- end .navbar -->


    <div class="overlay">
      <div class="overlay--content grid">
        <div class="centered grid__col--12">
          <div class="tab-container">

            <ul class="tab-menu">
              <li class="tab-menu__item"><a href="#">Sign Up</a></li>
              <li class="tab-menu__item"><a href="#">Sign In</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-content__item" id="sign-up-container">
              </div> 

              <div class="tab-content__item" id="sign-in-container">
              </div> 
              
            </div> 
          </div> 
        </div>  <!-- end .grid__col--12 -->
      </div> <!-- end .overlay--content -->
    </div> <!-- end .overlay -->


    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/fittext.js" type="text/javascript"></script> 
    <script src="js/applications.js"></script>


  </body>
</html>