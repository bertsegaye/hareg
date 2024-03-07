<nav>
  <div class="header">
        <h1>Hareg Online Female Wear Shoping</h1>
</div>
    <ul class="sidebar">
      <li onclick=hideSidebar() class="exit"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
      <li onclick=hideSidebar()><a href="home.php">Home</a></li>
      <li onclick=hideSidebar()><a href="#">Fashions</a></li>
      <li onclick=hideSidebar()><a href="#">Wears</a></li>
      <li onclick=hideSidebar()><a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> Cart</a></li>
      <li onclick=hideSidebar()><a href="#"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i> Login</a></li>
    </ul>
    <ul>
      <li><a href="#"><i class="fa fa-female fa-3x" aria-hidden="true"></i><h1>
      HOS</h1></a></li>
      <li class="hideOnMobile"><a href="home.php">Home</a></li>
      <li class="hideOnMobile"><a href="#">Fashions</a></li>
      <li class="hideOnMobile dropdown">
        <a onclick="myFunction()" href="#" class="dropbtn">Wears</a>
        <div id="myDropdown" class="dropdown-content">
          <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
          <a href="#about">Kids</a>
          <a href="#base">Youngs</a>
          <a href="#blog">Mothers</a>
          <a href="#contact">Fat Female</a>
          <a href="#custom">Thin Female</a>
          <a href="#support">Tall Female</a>
          <a href="#tools">Short Female</a>
          <a href="#tools">Medium Female</a>
        </div></li>
      <li class="hideOnMobile"><a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a></li>
      <li class="hideOnMobile dropdown1">
        <a href="#" onclick="myFunction1()" class="dropbtn1"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
      <div id="myDropdown1" class="dropdown-content1">
        <a href="#about">SignIn</a>
        <a href="#base">SignUp</a>
        <a href="#blog">User Guide</a>
        <a href="#contact"> About Us</a></div>
      </li>
      <li class="menu-button" onclick=showSidebar()>
        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </li>
    </ul>
  </nav>
  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
      const menutoggle = document.querySelector('.menu-button')
      menutoggle.style.display = 'none'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      const menutoggle = document.querySelector('.menu-button')
      menutoggle.style.display = 'flex'
      sidebar.style.display = 'none'
    }
  </script>
  <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    function myFunction1() {
      document.getElementById("myDropdown1").classList.toggle("show1");
    }
    function filterFunction() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
    </script>