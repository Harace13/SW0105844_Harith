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
  <div class="form-group">
  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
  <thead>              
   <tr>
      <th>Project ID</th>
      <th>Project Type</th>
      <th>Project Name</th>
      <th>Project Leader</th>
                                
      <th>Action</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($member as $x)
       <tr>
          <td scope="row">{{ $x['id'] }}</td>
          <td>{{$x['ptype']}} </td>
          <td>{{$x['pname']}}</td>                
          <td>{{$x['pleader']}}</td>
            <td> <a href="{{"editproject/".$x['id']}}"><button type="button" class="btn btn-primary">Edit </button></a> </href>   
            <a href="{{"del/".$x['id']}}"><button type="button" class="btn btn-warning">Delete </button></a> </href>   
            </td>
             </tr>
  @endforeach
  </tr>
   </tbody>   
   <span>{{$member->links()}}</span>
   <style>
     .w-5{
       display:none;
     }
     </style>
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

