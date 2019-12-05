<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>welcome to Nveloop</title>
    </head>
    <body>
        <!-- As a link -->
        <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h2">NVELOOP</span>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">HOME</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#">LOGIN <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('c_report')?>"> Employee Report <span class="sr-only"></span></a>
        </li>
        </ul>


        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Employee ID / Name" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        </nav>

        <div class="container">
            <br/>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('employeeController/create')?>">
        <div class="form-group">
                <label for="formGroupExampleInput">Employee ID</label>
                <input type="text" class="form-control" name="emp_id" id="formGroupExampleInput" placeholder="Your Employee ID">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput"> First Name</label>
                <input type="text" class="form-control" name="first_name" id="formGroupExampleInput" placeholder="Your First name">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="formGroupExampleInput2" placeholder="Your Last Name">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Role</label>
                <input type="text" class="form-control" name="role" id="formGroupExampleInput2" placeholder="Your Role">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Contact Number</label>
                <input type="text" class="form-control" name="contact_no" id="formGroupExampleInput2" placeholder="Your contact No">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Your email address will be used as your username!</small>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">address</label>
                <input type="text" class="form-control" name="address" id="formGroupExampleInput2" placeholder="Your Address">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Date of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" id="formGroupExampleInput2" placeholder="Your Dateof Birth">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Emergency Contact Number</label>
                <input type="text" class="form-control" name="emergency_contact" id="formGroupExampleInput2" placeholder="Your emergency contact No">
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Agree the Terms & Conditions.</label>
            </div>
            <button type="submit" class="btn btn-primary" value="save">SignUp</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">emp_id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Emergency Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row) { ?>
                    <tr>
                    <th scope="row"> <?php echo $row->emp_id; ?></th>
                    <td><?php echo $row->first_name; ?></td>
                    <td><?php echo $row->last_name; ?></td>
                    <td><?php echo $row->role; ?></td>
                    <td><?php echo $row->contact_no; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->address; ?></td>
                    <td><?php echo $row->date_of_birth; ?></td>
                    <td><?php echo $row->emergency_contact; ?></td>
                    <td> <a href="<?php echo site_url('employeeController/edit');?>/<?php echo $row->emp_id;?>">Edit</a> |
                        <a href="<?php echo site_url('employeeController/delete')?>/<?php echo $row->emp_id; ?>" class="text-danger">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html> 