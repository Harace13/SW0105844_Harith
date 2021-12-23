<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"style="height:10%;">
          <a class="navbar-brand brand-logo" href="/redirect"><img src="/admin/assets/images/uniten_logo.png" alt="logo" style="width:130px;height:90px;"/></a>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Project Manager</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
            
                <div class="p-2">
                @csrf
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  ps-2 text-dark mt-2">Actions</h5>
                  <form method="POST" action="{{ route('logout') }}">
                                @csrf
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ms-1"></i>
                  </a>
</form>
                </div>
              </div>
            </li>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>