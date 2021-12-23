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
          <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Project ID</th>
      <th scope="col">Project Type</th>
      <th scope="col">Project Name</th>
      <th scope="col">Project Leader</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Duration (month)</th>
      <th scope="col">Cost (RM)</th>
      <th scope="col">Client</th>
      <th scope="col">Stage</th>
      <th scope="col">Status</th>
      <th scope="col">Member 1</th>
      <th scope="col">Member 2</th>
    </tr>
  </thead>
  @foreach ($x as $x)
  <tbody>
    <tr style="background-color:white;">
 
  <th scope="row">{{$x['id']}}</th>
      <th scope="col">{{$x['ptype']}}</th>
      <th scope="col">{{$x['pname']}}</th>
      <th scope="col">{{$x['pleader']}}</th>
      <th scope="col">{{$x['startDate']}}</th>
      <th scope="col">{{$x['endDate']}}</th>
      <th scope="col">{{$x['duration']}}</th>
      <th scope="col">{{$x['cost']}}</th>
      <th scope="col">{{$x['client']}}</th>
      <th scope="col">{{$x['stage']}}</th>
      <th scope="col">{{$x['status']}}</th>
      <th scope="col">{{$x['member1']}}</th>
      <th scope="col">{{$x['member2']}}</th>
      
</tr>

</tbody>
@endforeach
</table>
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

