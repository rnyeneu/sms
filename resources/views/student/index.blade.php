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
        <div class="row mt-3">
          <div class="col-md-12">
            @if (session('status'))
              <div class="alert alert-success" id="alert">
                {{ session('status') }}
              </div>
            @endif
            <div class="card">
              <div class="card-header">
                  <a href="{{ url('student/create') }}" class="btn btn-primary btn-sm float-end">Add Student</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Students List</h5>
        <table class="table">
            <thead>
              <tr>
                <th >#</th>
                <th >Reg Number</th>
                <th >First Name</th>
                <th >Surname</th>
                <th >DOB</th>
                <th >Sex</th>
                <th >Guardian phone</th>
                <th >Address</th>
                <th ></th>
              </tr>
            </thead>
            <tbody>
              
              
              @foreach ($student as $row)
             
              <tr>
                <td></td>
                <td>{{ $row->registration_number }}</td>
                <td>{{ $row->first_name }}</td>
                <td>{{ $row->surname }}</td>
                <td>{{ $row->birth_date }}</td>
                <td>{{ $row->sex }}</td>
                <td>{{ $row->guardian_phone_number }}</td>
                <td>{{ $row->address }}</td>
                <td>
                  <a href="{{ url('student/'.$row->id) }}" class="btn btn-primary btn-sm">Show</a>
                </td>
                <td>
                  <a href="{{ url('student/'.$row->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
                <td>
                  <form action="{{ url('student/'.$row->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                  
                </td>
              </tr>
              
              @endforeach
            </tbody>
        </table>

                
              </div>
            </div>

        </div>
          </div>
        </div>
    </div>

 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      $("document").ready(function(){
        setTimeout(function(){
          $("div.alert").remove();
      }, 3000);
    });
    </script>
  </body>
</html>
