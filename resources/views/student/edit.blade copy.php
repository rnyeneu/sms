@extends('default')
@section('sectionTitle', $studentTitle)
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ url('student/'.$student->id) }}" method="POST" class="form-horizontal" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <h4 class="card-title">Edit a student's details</h4>
                        <div class="form-group row">
                            <label for="regno"  class="col-sm-3 text-end control-label col-form-label">Registration Number</label>
                            <div class="col-sm-9">
                                <input value="{{ $student->registration_number }}" type="text" class="form-control" id="regno" placeholder="Registration number Here" name="registration_number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                            <div class="col-sm-9">
                                <input value="{{ $student->first_name }}" type="text" class="form-control" id="fname" placeholder="First Name Here" name="first_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sname" class="col-sm-3 text-end control-label col-form-label">Surname</label>
                            <div class="col-sm-9">
                                <input value="{{ $student->surname }}" type="text" class="form-control" id="sname" placeholder="Surname Here" name="surname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date-masl" class="col-sm-3 text-end control-label col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input value="{{ $student->birth_date }}" type="text" name="birth_date" class="form-control date-inputmask" id="date-mask" placeholder="Enter Date"
                              />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date-masl" class="col-sm-3 text-end control-label col-form-label">Sex</label>
                            <div class="col-sm-9">
                                <select name="sex" required class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                                    <option>Select Sex</option>
                                    
                                    <option
                                    @if($student->sex == "B")
                                    {{"selected"}}
                                    @endif
                                    value="B">Boy
                                </option>
                                <option
                                    @if($student->sex == "G")
                                    {{"selected"}}
                                    @endif
                                    value="G">Girl
                                </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gpn" class="col-sm-3 text-end control-label col-form-label">Guardian Phone</label>
                            <div class="col-sm-9">
                                <input value="{{ $student->guardian_phone_number}}" type="text" class="form-control" id="gpn" placeholder="Guardian phone Number Here" name="guardian_phone_number">
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 text-end control-label col-form-label">Guardian Address</label>
                            <div class="col-sm-9">
                                <input value="{{ $student->address }}" type="text" class="form-control" id="address" placeholder="Address Here" name="address">
                            </div>
                        </div>
              
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                UPDATE
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
