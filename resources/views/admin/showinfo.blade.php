<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper"> 

     <div align="center" style="padding-top: 80px;">

     <table>
                <tr style="background-color:black;"> 
                <th style="padding: 10px;  color:white;">nom</th> 
                <th style="padding: 10px;  color:white;">photo</th> 
                <th style="padding: 10px;  color:white;">cin</th>
                <th style="padding: 10px;  color:white;">drpp</th>
                <th style="padding: 10px;  color:white;">dateRe</th>
                <th style="padding: 10px;  color:white;">phone</th>
                <th style="padding: 10px;  color:white;">mail</th> 
                <th style="padding: 10px;  color:white;">spec</th>
                <th style="padding: 10px;  color:white;">str</th>
                <th style="padding: 10px;  color:white;">doA</th>
                <th style="padding: 10px;  color:white;">doP</th>
                <th style="padding: 10px;  color:white;">doS</th>
                <th style="padding: 10px;  color:white;">eta</th>      
                <th style="padding: 10px;  color:white;">Approu</th>
                <th style="padding: 10px;  color:white;">rejet</th>
       
         </tr>
         @foreach($data as $info)
         <tr align="center" style="background-color:skyblue; ">
             <td></a>{{$info->nom}}</td>
             <td>{{$info->photo}}</td>
             <td>{{$info->cin}}</td>
             <td>{{$info->drpp}}</td>
             <td>{{$info->date_recrutement}}</td>
             <td>{{$info->telephone}}</td>
             <td>{{$info->email}}</td>
             <td>{{$info->specialite}}</td>
             <td>{{$info->structure}}</td>
             <td><a download>{{$info->dossierA}}</a></td>
             <td><a download>{{$info->dossierP}}</a></td>
             <td><a download>{{$info->dossierS}}</a></td>
             <td>{{$info->status}}</td>
             <td><a class="btn btn-success" href=" {{url('approuver',$info->id)}}">Approu</a></td>
             <td><a class="btn btn-danger" href="{{url('rejeter',$info->id)}}">Rejet</a></td>
         </tr>
         @endforeach
         
         </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>

</html>