<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>UNITEN R&D SDN BHD</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container" style="margin-left:10%">
        <img src="{{url('/img/uniten_logo.png')}}" alt="Image" style="width:130px;height:80px;"/>
          <a class="navbar-brand" href=""><h2>UNITEN R&D Sdn Bhd (URND)</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              @auth
                    <li class="nav-item">
                <a class="nav-link" href="">Project Details</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="/manageproj">Manage Project Details</a>
              </li>
              @endauth

            </ul>
            <ul class="navbar-nav ml-auto" >
            <li class="nav-item">
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                       <li class="nav-item">
                          <x-app-layout>
                         </x-app-layout>
                        </li>
                    @else
                       <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" >Log in</a></li>

                        @if (Route::has('register'))
                           <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif        
            </li>     
            </ul>              
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                <div class="container" style="border-radius: 5px;background-color: #ededed;padding: 20px;">
            @csrf 
            <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Start Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="rd" name="sd" value="{{$x['startDate']}}" class="form-control"disabled><small class="help-block form-text"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">End Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="rd" name="ed" value="{{$x['endDate']}}" class="form-control" disabled><small class="help-block form-text"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Duration</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="duration" value="{{$x['duration']}} month"  class="form-control"disabled><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cost</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="cost" value="RM {{$x['cost']}}"  class="form-control" disabled><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="client" value="{{$x['client']}}"  class="form-control"disabled><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project stage</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="progress" value="{{$x['stage']}}"  class="form-control"disabled><small class="form-text text-muted"></small></div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Status</label></div>
                    <div class="col-12 col-md-9"><div class="col-12 col-md-9"><input type="text" id="text-input" name="status" value="{{$x['status']}}"  class="form-control"disabled><small class="form-text text-muted"></small></div>
                    </div>
                </div>
</form>
</div>
                </div>
            </div>
          </div>
          <!-- // Item -->
          
        </div>
    </div>
    <!-- Banner Ends Here -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>