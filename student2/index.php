<?php
require_once './student.php';
$student=new Student();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
    <body>
    <div class="container my-5 py-5">
    <h1 class="text-center mb-4 ">FORM</h1>
        <div class="row mt-5">
            <div class="col-6">
                <form class="w-50" action="./add-student.php" method="POST">
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
                <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($student->get_student() as $student) :?>
                        <tr>
                            <td><?=$student->id?></td>
                            <td><?=$student->name?></td>
                            <td><?=$student->email?></td>
                            <td><?=$student->phone?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </div>
    </body>
</html>