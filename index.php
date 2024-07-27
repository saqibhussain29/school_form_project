











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>School foam</h2>
        <form  action="show.php" method="POST" enctype="multipart/form-data"  >
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="std_name" id="inputName" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="inputName">last name</label>
                <input type="text" class="form-control" name="last_name"   id="inputName" placeholder="Enter your Last name">
            </div>
            <div class="form-group">
                <label for="inputEmail">Father name</label>
                <input type="text" class="form-control"  name="father_name" id="inputEmail" placeholder="Enter your father name">
            </div>
            <div class="form-group">
                <label for="inputEmail">mother name</label>
                <input type="text" class="form-control"  name="mother_name"  id="inputEmail" placeholder="Enter your monther name">
            </div>
            <div class="form-group">
                <label for="inputEmail">school name </label>
                <input type="text" class="form-control"   name="school"  id="inputEmail" placeholder="Enter your school name">
            </div>
            <div class="form-group">
                <label for="inputEmail">class</label>
                <input type="text" class="form-control"  name="class" id="inputEmail" placeholder="Enter your class">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="inputAge">Age</label>
                <input type="number" class="form-control" name="age" id="inputAge" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <label for="inputAge">Gender</label>
                <input type="text" class="form-control"  name="gender" id="inputAge" placeholder="Enter your gender">
            </div>
      
            <div class="form-group">
                <label for="inputImage">Upload Image</label>
                <input type="file" class="form-control-file" name="image" id="inputImage">
            </div>
           
           
            </div>
           
            <div class="text-center mt-3">
                <button type="submit" value="upload"  class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
