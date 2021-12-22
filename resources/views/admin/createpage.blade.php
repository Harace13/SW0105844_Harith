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
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        
        @include("admin.adminside")
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <form action="/create" method="post">
            @csrf 
  <div class="form-group">
  <label for="ptype">Choose project type:</label><br>
<select name="ptype" id="ptype">
  <option value="Consultancy Project">Consultancy Project</option>
  <option value="Research Project">Research Project</option>
</select><br><br>
    <label for="pname">Project Name</label>
    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Project Name">
  </div>
  
  <label for="pleader">Choose Project Leader:</label><br>
<select name="pleader" id="pleader">
@foreach($member as $x)
<option value="{{$x['name']}}">{{$x['name']}}</option>
    @endforeach
    
</select> <br><br>
<button type="submit" class="btn btn-primary">Create</button>
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

