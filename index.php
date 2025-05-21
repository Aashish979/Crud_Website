<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap css Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <title>AJAX REST API</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP Crud Operation</a>
    </nav>

    <!-- Button Section -->
    <div class="container mt-3">
        <div class="row">
            <div class="col text-center">
                <button class="btn btn-success btn-sm" id="get-btn" onclick="GET()">GET</button>
                <button class="btn btn-primary btn-sm" id="post-btn" data-toggle="modal" data-target="#add-employee-modal">POST</button>
                <button class="btn btn-warning btn-sm" id="put-btn">UPDATE</button>
                <button class="btn btn-danger btn-sm " id="delete-btn">DELETE</button>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal" id="add-employee-modal">
        <div class="modal-dialog">
            <div class="modal-content animated slideInRight">
                <div class="modal-header bg-success text-white">
                    <h3>Add Employee</h3>
                    <button class="close" data-dismiss="modal"><i class="fa fa-times-circle"></i></button>
                    
                </div>
                <div class="modal-body bg-light">
                 <form id="add-employee-form">
                     <div class="form-group">
                       <input id="fname"  type="text" class="form-control" placeholder="First Name">  
                   </div>
                   <div class="form-group">
                       <input id="lname"   type="text" class="form-control" placeholder="Last Name"> 
                   </div>
                   <div class="form-group">
                       <input id="gmail"  type="email" class="form-control" placeholder="Email"> 
                   </div>
                   <div class="form-group">
                       <select id="gender"  class="form-control"> 
                           <option value="">Select Gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                       </select>  
                   </div>
                   <div class="form-group">
                       <input id="mobile"   type="text" class="form-control" placeholder="Mobile"> 
                   </div>
                   <div class="text-center">
                     <input type="submit" value="submit" onclick="POST()" class="btn btn-sm btn-success">
                 </div>
             </form>   
         </div>
     </div>
 </div>
</div>

<!-- Update Employee Modal -->

<div class="modal" id="update-employee-modal">
    <div class="modal-dialog">
        <div class="modal-content animated slideInRight">
            <div class="modal-header bg-secondary text-white">
                <h3>Update Employee</h3>
                <button class="close" data-dismiss="modal"><i class="fa fa-times-circle"></i></button>
                
            </div>
            <div class="modal-body bg-light">
             <form id="update-employee-form">
                 <div class="form-group">
                   <input id="upd-first-name" required type="text" class="form-control" placeholder="First Name">  
               </div>
               <div class="form-group">
                   <input id="upd-last-name" required type="text" class="form-control" placeholder="Last Name">  
               </div>
               <div class="form-group">
                   <input id="upd-email" required type="email" class="form-control" placeholder="Email">  
               </div>
               <div class="form-group">
                   <select id="upd-gender" required class="form-control">
                       <option value="">Select Gender</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                   </select>  
               </div>
               <div class="form-group">
                 <input id="upd-mobile"   type="text" class="form-control" placeholder="Mobile"> 
             </div>

             <div>
                 <input type="submit" value="Update" class="btn btn-success" onclick="UPDATE()">
                 <input type="text" id="userId">
             </div>
         </form>   
     </div>
 </div>
</div>
</div>




<div id="msg">

</div>

<!-- Table Section -->

<div class="container mt-3">
    <div class="row">
        <div class="col text-center">
            <table class="table  text-center table-striped table-dark">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>GMAIL</th>
                        <th>GENDER</th>
                        <th>MOBILE</th>
                        <th>OPERATION</th>
                    </tr>
                </thead>
                <tbody id="table-body">

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- BODY ENDS -->

<script src= "bootstrap/js/jquery-3.3.1.min.js"></script>
<script src= "bootstrap/js/popper.min.js"></script>
<script src= "bootstrap/js/bootstrap.min.js"></script>
<script src= "bootstrap/js/mdb.min.js"></script>
<script src= "app.js"></script>
</body>
</html>
