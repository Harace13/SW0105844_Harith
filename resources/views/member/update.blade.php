<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet" type="text/css">

    <title>UNITEN R&D SDN BHD</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
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
                <a class="nav-link" href="/projectdetail">Project Details</a>
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
                <div class="container" style="border-radius: 5px; background-color: #ededed;margin-top: 10%;">
                <form action="/edit" method="post">
            @csrf 
  <div class="form-group">
    <br>
    <h1>UPDATE PROJECT DETAILS</h1><br>
  <label for="projectid">Project ID:</label>
  <input type="text" class="" id="id" name="id" value="{{$disp['id']}}" readonly><br><br>
  <label for="ptype">Project Type:</label>
  <input type="text" class="" id="ptype" name="ptype" value="{{$disp['ptype']}}" readonly> <br><br>
  <label for="pname">Project Name:</label>
  <input type="text" class="" id="pname" name="pname" value="{{$disp['pname']}}" readonly> <br><br>
  <label for="startDate">Start Date:</label>
  <input type="date" class="" id="startDate" name="startDate" value="{{$disp['startDate']}}">&emsp;
  <label for="endDate">End Date:</label>
  <input type="date" class="" id="endDate" name="endDate" value="{{$disp['endDate']}}"><br><br>
  <label for="duration">Duration (month):</label>
  <input type="text" class="" id="duration" name="duration" value="{{$disp['duration']}}">&emsp;
  <label for="cost">Cost: RM</label>
  <input type="text" class="" id="cost" name="cost" value="{{$disp['cost']}}"><br><br>
  <label for="client">Client Name:</label>
  <input type="text" class="" id="client" name="client" value="{{$disp['client']}}"><br><br>
  <label for="stage">Project Stage:</label>
  <select name="stage" id="stage" value="{{$disp['stage']}}">
  <option hidden value="{{$disp['stage']}}">{{$disp['stage']}}</option>
  <option value="Inception">Inception</option>
  <option value="Milestone 1">Milestone 1</option>
  <option value="Milestone 2">Milestone 2</option>
  <option value="Final Report">Final Report</option>
</select>&emsp;
<label for="status">Project Status:</label>
<select name="status" id="status" value="{{$disp['status']}}">
<option hidden value="{{$disp['status']}}">{{$disp['status']}}</option>
  <option value="On track">On track</option>
  <option value="Delayed">Delayed</option>
  <option value="Extended">Extended</option>
  <option value="Completed">Completed</option>
</select><br><br>

<label for="pmember1">Choose Project Member 1:</label>
<select name="pmember1" id="pmember1">
<option hidden value="{{$disp['member1']}}">{{$disp['member1']}}</option>
@foreach($member as $x)
<option value="{{$x['name']}}">{{$x['name']}}</option>
    @endforeach
</select>&emsp;

    <label for="pmember2">Choose Project Member 2:</label>
<select name="pmember2" id="pmember2">
<option hidden value="{{$disp['member2']}}">{{$disp['member2']}}</option>
@foreach($member as $x)
<option value="{{$x['name']}}">{{$x['name']}}</option>
    @endforeach
</select><br><br>
<button type="submit" class="btn btn-primary">Update</button>
<button type="reset" class="btn btn-primary">Reset</button><br><br>
</form>
</div>
                </div>
            </div>
          </div>
          <!-- // Item -->
          
        </div>
    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/accordions.js"></script>

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