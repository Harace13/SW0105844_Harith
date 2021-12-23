<x-app-layout>
  </x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    </head>
    <body>
      <!-- partial:partials/_navbar.html -->
      @include("admin.adminnav")
      <!-- partial -->
      <div class="container-fluid page-body-wrapper" >
        <!-- partial:partials/_sidebar.html -->
        
        @include("admin.adminside")
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <form action="/editproj" method="post">
            @csrf 
  <div class="form-group">
    <br>
    <h1>EDIT PROJECT</h1><br>
  <label for="projectid">Project ID:</label>
  <input type="text" class="" id="id" name="id" value="{{$disp['id']}}" readonly><br><br>
  <label for="ptype">Project Type:</label>
  <select name="ptype" id="ptype" value="{{$disp['ptype']}}">
  <option value="Consultancy Project">Consultancy Project</option>
  <option value="Research Project">Research Project</option> 
  </select><br><br>

  <label for="pname">Project Name:</label>
  <input type="text" class="" id="pname" name="pname" value="{{$disp['pname']}}"><br><br>

  <label for="pleader">Choose Project Leader:</label>
<select name="pleader" id="pleader" value="{{$disp['pleader']}}">
@foreach($member as $x)
<option value="{{$x['name']}}">{{$x['name']}}</option>
    @endforeach
</select><br><br>
<button type="submit" class="btn btn-primary">Update</button>
<button type="reset" class="btn btn-primary">Reset</button><br><br>
</form>
</div>
</div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include("admin.adminscript")
  </body>
</html>

