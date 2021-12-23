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

