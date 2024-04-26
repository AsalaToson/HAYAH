
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAH Lab Doctor Dashboard</title>
    <link rel="icon" type="image/png" href="../../images/logo.png"/>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../../css/style.css">

</head>

<body id="body" style="height: 100vh;">

<!-- main container-->
<div class="main">

  <!-- sidebar-->
  <div class="sidebar">
    <a href="#"><img src="../../images/logo.png" alt="" width="200" height="100"></a>
    <ul>
      <li><a href="../../lab_doctor_dashboard" class="toggle-link"> <i class="fa-solid fa-house"></i>    Dashboard</a>

      </li>

      </li>

      <li><a href="#" class="toggle-link"><i class="fas fa-medkit"></i> Analysis Requests</a>
        <ul class="sublist">
          <li><a href="../anaylsisRequests/all_requests.html">All Requests</a></li>

        </ul>
      </li>

      <li><a href="#" class="toggle-link"><i class="fa-solid fa-clipboard"></i>   Analysis Reports</a>
        <ul class="sublist">
          <li><a href="add_analysis_report.html">Add Analysis Reports</a></li>

          <li><a href="all_analysis_reports.html">All Analysis Reports</a></li>
        </ul>
      </li>

  </div>



  <div class="content">

    <div class="nav">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto" >
           <li class="nav-item">
             <a class="nav-link" href="#" style="padding-top: 18px;"><i class="fa-solid fa-toggle-on" id="dark"></i>
             </i></a>
           </li>


           <li class="nav-item">
             <button class="nav-link btn btn-link" id="searchIcon" style="padding-top: 16px;"><i class="fa fa-search"></i>search</button>
           </li>

           <li class="nav-item dropdown" style="padding-top: 10px;">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
               <i class="fa fa-bell"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 350px;" >
               <p style="text-align: center;"> you have 3 notification</p><hr>
               <a class="dropdown-item" href="#" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> Lorem ipsum dolor sit, officia placeat,</a>
               <a class="dropdown-item" href="edit profile" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> obcaecati aspernatur sequi nihil esse rem</a>
               <a class="dropdown-item" href="#" style="height: 40px;"><i class="fa-solid fa-circle-exclamation"></i> obcaecati aspernatur sequi nihil esse rem </a>
             </div>
           </li>
           <li class="nav-item-dropdown" >
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" >
               <i class="fas fa-user" ></i>   John Doe
             </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="height: 150px; width: 200px;">
               <a class="dropdown-item" href="../../labdoctorprofile.html" ><i class="fa fa-user" aria-hidden="true"></i>
                 Profile</a>
                 <a class="dropdown-item" href="../../lab_doc_schedule .html"><i class="fa fa-user" aria-hidden="true"></i>
                  My schedule</a>
               <a class="dropdown-item" href="#" ><i class="fa fa-cog" aria-hidden="true"></i>
                 Settings</a>

               <a class="dropdown-item" href="#" ><i class="fa-solid fa-right-from-bracket"></i>
                 logout</a>


             </div>

           </li>
         </ul>
       </div>

     </nav>

  </div>

      <h1>All Analyis Reports </h1>
      <div class="inner_content">
        <h3>Reports  list </h3><br>
        <hr>
        <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-groups">
                      <label for="show-entries">Show Entries</label>
                      <select class="form-control" id="show-entries">
                          <option value="1" >10</option>
                          <option value="2">20</option>
                          <option value="3">30</option>
                          <option value="4">40</option>
                          <option value="5">50</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-groups">
                      <label for="search" id="Slabel">Search </label>
                      <input type="text" class="form-control" id="search" placeholder="search ">
                  </div>
              </div>
          </div>
      </div>
      <div class="container2">

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>

                    <th> Patient ID</th>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Report Name</th>
                    <th>operations</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>sara </td>
                    <td>john</td>
                    <td>Blood</td>
                    <td><div class="container3" style="display: flex;">
                      <!-- Delete Button with Delete Icon -->
                      <button type="button" class="btn btn-danger delete-button"  id="dbutton" >
                          <i class="fas fa-trash-alt"></i> Delete

                      </button>

                <a href="analysis_report_details.html"> <button type="button" class="btn btn-secondary"  id="dbutton" >
                  <i class="fas far fa-eye"></i> view
              </button></a>
                    </div></td>


                </tr>
                <tr>
                  <td>1</td>
                  <td>sara </td>
                  <td>john</td>
                  <td>Blood</td>
                  <td><div class="container3" style="display: flex;">
                    <!-- Delete Button with Delete Icon -->
                    <button type="button" class="btn btn-danger delete-button"  id="dbutton" >
                        <i class="fas fa-trash-alt"></i> Delete

                    </button>


              <a href="analysis_report_details.html"> <button type="button" class="btn btn-secondary"  id="dbutton" >
                <i class="fas far fa-eye"></i> view
            </button></a>
                  </div></td>



              </tr>
              <tr>
                <td>1</td>
                <td>sara </td>
                <td>john</td>
                <td>Blood</td>
                <td><div class="container3" style="display: flex;">
                  <!-- Delete Button with Delete Icon -->
                  <button type="button" class="btn btn-danger delete-button"  id="dbutton" >
                      <i class="fas fa-trash-alt"></i> Delete

                  </button>


            <a href="analysis_report_details.html"> <button type="button" class="btn btn-secondary"  id="dbutton" >
              <i class="fas far fa-eye"></i> view
          </button></a>
                </div></td>



            </tr>
            <tr>
              <td>1</td>
              <td>sara </td>
              <td>john</td>
              <td>Blood</td>
              <td><div class="container3" style="display: flex;">
                <!-- Delete Button with Delete Icon -->
                <button type="button" class="btn btn-danger delete-button"  id="dbutton" >
                    <i class="fas fa-trash-alt"></i> Delete

                </button>


          <a href="analysis_report_details.html"> <button type="button" class="btn btn-secondary"  id="dbutton" >
            <i class="fas far fa-eye"></i> view
        </button></a>
              </div></td>


          </tr>
          <tr>
            <td>1</td>
            <td>sara </td>
            <td>john</td>
            <td>Blood</td>
            <td><div class="container3" style="display: flex;">
              <!-- Delete Button with Delete Icon -->
              <button type="button" class="btn btn-danger delete-button"  id="dbutton" >
                  <i class="fas fa-trash-alt"></i> Delete

              </button>


        <a href="analysis_report_details.html"> <button type="button" class="btn btn-secondary"  id="dbutton" >
          <i class="fas far fa-eye"></i> view
      </button></a>
            </div></td>


        </tr>
        <tr>
          <td>1</td>
          <td>sara </td>
          <td>john</td>
          <td>Blood</td>
          <td><div class="container3" style="display: flex;">
            <!-- Delete Button with Delete Icon -->
            <button type="button" class="btn btn-danger delete-button"  id="dbutton" >
                <i class="fas fa-trash-alt"></i> Delete

            </button>


        <a href="analysis_report_details.html"> <button type="button" class="btn btn-secondary"  id="dbutton" >
          <i class="fas far fa-eye"></i> view
      </button></a>
          </div></td>

      </tr>
            </tbody>
        </table>
        </div>
    </div>

 <div class="pag">

    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#" class="active">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>

 </div>


    </div>

  </div>



  </div>


  <!-- Modal -->
<div id="myModal" class="modal2">
  <div class="modal-content2">
    <p>Are you sure?</p>
    <button id="confirmDelete" class="btn btn-danger">Yes</button>
    <button id="cancelDelete" class="btn btn-secondary">Cancel</button>
  </div>
</div>
   <!--modal-->

   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="exampleModalLabel" style="color: black; background-color: none;">Search Here</h2>
          <button type="button" class="btn-close" aria-label="Close" id="closeModalButton"><i class="fa fa-times" aria-hidden="true"></i>
          </button>

        </div>
        <div class="modal-body">

          <form>
            <div class="form-group">
              <label for="searchInput">Search:</label>
              <input type="text" class="form-control" id="searchInput" placeholder="Search..." style="width: 400px;">
            </div>
            <button type="submit" class="btn btn-primary "  style="width: 100px; height: 40px; padding: 1px;">Search</button>
            <button type="submit" class="btn btn-primary "style="width: 100px; height: 40px; padding: 1px;" >Cancel</button>

          </form>
        </div>
      </div>
    </div>
  </div>




  <script src="../../js/popper.min.js"></script>
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>












