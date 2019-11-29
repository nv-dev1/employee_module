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

        <title>Nveloop | Update Emlpoyee Information</title>
    </head>
    <body>
        <div class="container">
        <h2> Hi! </h2>
        <h2> Update Your Details</h2></br>
        <form method="post" action="<?php echo site_url('employeeController/update()')?>/<?php echo $row->emp_id">
            <div class="form-group">
                <label for="formGroupExampleInput">Employee ID</label>
                <input type="text" class="form-control" name="emp_id" value="<?php echo $row->emp_id; ?>" id="formGroupExampleInput" placeholder="Your Employee ID">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput"> First Name</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo $row->first_name; ?>"id="formGroupExampleInput" placeholder="Your First name">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Last Name</label>
                <input type="text" class="form-control" name="last_name"value="<?php echo $row->last_name; ?>" id="formGroupExampleInput2" placeholder="Your Last Name">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Role</label>
                <input type="text" class="form-control" name="role"value="<?php echo $row->role; ?>" id="formGroupExampleInput2" placeholder="Your Role">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Contact Number</label>
                <input type="text" class="form-control" name="contact_no"value="<?php echo $row->contact_no; ?>" id="formGroupExampleInput2" placeholder="Your contact No">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Your email address will be used as your username!</small>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">address</label>
                <input type="text" class="form-control" name="address"value="<?php echo $row->address; ?>" id="formGroupExampleInput2" placeholder="Your Address">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Date of Birth</label>
                <input type="date" class="form-control" name="date_of_birth"value="<?php echo $row->date_of_birth; ?>" id="formGroupExampleInput2" placeholder="Your Dateof Birth">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Emergency Contact Number</label>
                <input type="text" class="form-control" name="emergency_contact"value="<?php echo $row->emergency_contact; ?>" id="formGroupExampleInput2" placeholder="Your emergency contact No">
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
    </body>
</html>