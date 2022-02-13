<header class="ds-header main-bg">

  <div class="container">

      <div class="ds-header-navbar">

          <a class="ds-header-logo" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>

         

          <button id="js-mobile-menu-open" class="ds-header--toggler" type="button"  data-target="#navbarMenu" aria-label="Ouvrir le menu" aria-controls="navbarMenu" aria-expanded="false">
              <span class="ds-header--toggler-icon navbar-toggler-icon navbar-open-icon fontello icon-menu"></span>
              <span class="">Menu</span>
          </button>
          <div class="ds-header--collapse js-open " id="navbarMenu">

              <div class="mobile-menu-header">
                  <p>Menu</p>
                  <button id="js-mobile-menu-close" class="ds-header--toggler" type="button" data-target="#navbarMenu" aria-label="Fermer le menu" aria-controls="navbarMenu">
                      <span class="navbar-close-icon fontello icon-erreur"></span>
                      <span class="">Fermer</span>
                  </button>
              </div>


              <!-- NAV COMPONENT -->
              <nav class="ds-header-nav">
                  <ul class="nav-ul justify-content-center">
                      <li class="nav-li">
                          <a href="http://localhost:3000/kaggu" class="nav-link-item is-active" aria-current="page" >Accueil</a>
                      </li>
                      <li class="nav-li">
                          <a href="http://localhost:3000/kaggu/search" class="nav-link-item">Librarie</a>
                      </li>
                      <li class="nav-li">
                          <a href="http://localhost:3000/kaggu/contact" class="nav-link-item">Nous contacter</a>
                      </li>
                  </ul>


                  @guest

              
                  <ul class="ul-nav-user">

                      @if (Route::has('login'))
                          <li>
                              <a class="btn btn-green-solid  btn-small" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li>
                              <a class="btn btn-grey-solid  btn-small" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                    </ul>
                  @else
                      {{-- <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li> --}}
                 


                 

                  <!--  CONNECTED USER -->

                  <div class="ds-dropdown-menu"
                      x-data="{
                          open: false,
                          toggle() {
                              if (this.open) {
                                  return this.close()
                              }
                  
                              this.open = true
                          },
                          close(focusAfter) {
                              this.open = false
                  
                              focusAfter && focusAfter.focus()
                          }
                      }"
                      x-on:keydown.escape.prevent.stop="close($refs.button)"
                      x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                      x-id="['dropdown-button']">

                      <!-- Button -->
                      <button
                          x-ref="button"
                          x-on:click="toggle()"
                          :aria-expanded="open"
                          :aria-controls="$id('dropdown-button')"
                          type="button"
                          class=" btn btn-green-solid  btn-small btn-icon-right icon-down-open-1"
                      >
                          <span> {{ Auth::user()->firstname }}</span>
                         
                      </button>
                  
                      <!-- Panel -->
                      <ul
                          x-ref="panel"
                          x-show="open"
                          x-transition.origin.top.left
                          x-on:click.outside="close($refs.button)"
                          :id="$id('dropdown-button')"
                          style="display: none;"
                          class="ds-dropdown-ct"
                      >
                          <li>
                              <a href="{{ route('Profile') }}" class="" >
                                  <em aria-hidden="true" class="fontello icon-user"></em>
                                  Mon compte
                              </a>
                  
                             
                          </li>
                  
                          <li>
                              <a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  <em aria-hidden="true" class="fontello icon-lock-open-alt"></em>
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                  
                             
                          </li>
                      </ul>
                  </div>


                  <!-- END CONNECTED USER -->

                  @endguest


                  
              </nav>
              <!-- END NAV COMPONENT -->


          </div>
      </div>
  </div>

</header>

<script >
  // Glabal Variables
  const togglerBtn = document.querySelector(".ds-header--toggler");
  const mobileOpenBtn = document.querySelector("#js-mobile-menu-open");
  const mobileCloseBtn = document.querySelector("#js-mobile-menu-close");
  const bodyMobile = document.querySelector("body");
  const collapse = document.querySelector(".ds-header--collapse");
  const isMobil = window.innerWidth <= 991;


  const menuMobile = () => {
      if(mobileOpenBtn) {
          mobileOpenBtn.addEventListener("click", function() {
          showMenu();
          });
      }
      if(mobileCloseBtn) {
          mobileCloseBtn.addEventListener("click", function() {
          hideMenu();
          });
      }

      document.addEventListener("keydown", function(event) {
          if (event.keyCode === 27) {
          hideMenu();
          }
      });

  
      if(collapse) {
          setMobileMenu();
      }
    
  }


  const setMobileMenu  = () => {

      if (window.innerWidth <= 991) {
          collapse.classList.add("menu-mobile");     
      } else {
          collapse.classList.remove("menu-mobile");
          collapse.classList.remove("js-open");
          togglerBtn.setAttribute("aria-expanded", false);
          bodyMobile.classList.remove("has-mobile-menu--overlay");
          removeOverlay(".mobile-menu-overlay");
      
      }
  }  


  // Show menu
  const showMenu = () => {
    if (mobileOpenBtn.getAttribute("aria-expanded") == "false") {
      mobileOpenBtn.setAttribute("aria-expanded", true);
    }
    setOverlay(".app");
    collapse.classList.add("js-open");
    collapse.setAttribute("aria-hidden", false);
    bodyMobile.classList.add("has-mobile-menu--overlay");
    mobileCloseBtn.focus();
  }
  // Hide menu
  const hideMenu = () => {
    if (mobileOpenBtn.getAttribute("aria-expanded") == "true") {
      mobileOpenBtn.setAttribute("aria-expanded", false);
    }
    removeOverlay(".mobile-menu-overlay");
    collapse.classList.remove("js-open");
    bodyMobile.classList.remove("has-mobile-menu--overlay");
    mobileOpenBtn.focus();
    collapse.setAttribute("aria-hidden", true);
  }

  function setOverlay(overlayParent) {
    const overlay = document.createElement("div");
    overlay.className = "ds-overlay mobile-menu-overlay";
    const parent = document.querySelector(overlayParent);
    parent.appendChild(overlay);
  }
  function removeOverlay(overlayClass) {
    const overlay = document.querySelector(overlayClass);
    if (overlay) {
      overlay.remove();
    }
    
  }

   
  document.addEventListener("DOMContentLoaded", () => {
      setMobileMenu();
      menuMobile()
  });
  
  window.addEventListener("resize", () => {
      setMobileMenu();
      console.log("HELOO")
  });
</script>