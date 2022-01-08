<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Information System</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Student Information System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="container p-2 bg-light ">
        <div class="row">
          <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Add Student
                    <a href="{{ url('student') }}" class="btn btn-danger btn-sm float-end">BACK</a>
                </div>
                <div class="card-body">       
                  <form action="{{ url('student') }}" method="POST">
                      @csrf
                      <div class="form-group mb-3">
                        <label for="">Registration Number</label>
                        <input type="text" class="form-control" name="registration_number">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="first_name">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">Surname</label>
                        <input type="text" class="form-control" name="surname">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">Date of Birth</label>
                        <input type="date" class="form-control" name="birth_date">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">Sex</label>
                        <select name="sex" class="form-select">
                            <option>Select Sex</option>
                            <option value="B">Boy</option>
                            <option value="G">Girl</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="">Guardian Phone Number</label>
                        <input type="text" class="form-control" name="guardian_phone_number">
                      </div>
                      <div class="form-group mb-3">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address">
                      </div>
                      <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">SAVE</button>
                      </div>
                  </form>
                </div>
              </div>

            </div>
        </div>
    </div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
