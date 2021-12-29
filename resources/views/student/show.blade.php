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

    <div class="container">
        <div class="row">
          <div class="col-md-8">
            @if (session('status'))
              <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
              <div class="card-header">
                  <a href="{{ url('student/create') }}" class="btn btn-danger btn-sm float-end">BACK</a>
              </div>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <label for="">Student's Registration Number</label>
                <h4>{{ $student->registration_number }}</h4>
                <hr>

                <label for="">First Name</label>
                <h4>{{ $student->first_name }}</h4>
                <hr>

                <label for="">Surname</label>
                <h4>{{ $student->surname }}</h4>
                <hr>

                <label for="">Date of Birth</label>
                <h4>{{ $student->birth_date }}</h4>
                <hr>

                <label for="">Sex</label>
                <h4>{{ $student->sex }}</h4>
                <hr>

                <label for="">Guardian Phone Number</label>
                <h4>{{ $student->guardian_phone_number }}</h4>
                <hr>

                <label for="">Address</label>
                <h4>{{ $student->address }}</h4>
                <hr>
              </div>
            </div>

        </div>
          </div>
        </div>
    </div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
