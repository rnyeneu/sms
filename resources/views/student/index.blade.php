@extends('default')
@section('sectionTitle', $studentTitle)
@section('content')
    <div class="row">
        <div class="col-md-12">
          @if (session('status'))
          <div class="alert alert-success" id="alert">
            {{ session('status') }}
          </div>
        @endif
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List of All Students</h5>
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped"
                >
                  <thead>
                    <tr>
                      <th >#</th>
                      <th >Reg Number</th>
                      <th >First Name</th>
                      <th >Surname</th>
                      <th >DOB</th>
                      <th >Sex</th>
                      {{-- <th >Guardian phone</th> --}}
                      {{-- <th >Address</th> --}}
                      <th></th>
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
                {{-- <td>{{ $row->guardian_phone_number }}</td> --}}
                {{-- <td>{{ $row->address }}</td> --}}
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
@endsection
