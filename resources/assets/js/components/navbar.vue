<template>   
  <!-- Navbar -->
    <nav>
        <div class="nav-wrapper">
          <div class="container">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" >menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li> 
                <router-link to="/main">Home</router-link>
              </li>
              <li><router-link to="/about">about</router-link></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Mobile</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Mobile</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End of navbar --> 
</template>
