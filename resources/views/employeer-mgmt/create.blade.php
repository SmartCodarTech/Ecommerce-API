@extends('civilian-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Civilians</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('civilian-management.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="first name" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="last name"required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-mars-double"></i>
                                    </div>
                                    <select type="text"  name="gender" class="form-control pull-right" id="gender" required>
                                        <option value="none">Please select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('service_id') ? ' has-error' : '' }}">
                            <label for="service_id" class="col-md-4 control-label">Service ID</label>

                            <div class="col-md-6">
                                <input id="service_id" type="text" class="form-control" name="service_id" value="{{ old('service_id') }}" placeholder="Service ID"required>

                                @if ($errors->has('service_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('service_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email"required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Type of Civilian</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <select type="text"  name="type" class="form-control pull-right" id="type" required>
                                        <option value="none">Please select</option>
                                        <option value="Senior">Senior</option>
                                        <option value="Junior">Junior</option>
                                       
                                    </select>

                                </div>
                            </div>
                        </div>
                           <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Salary</label>

                            <div class="col-md-6">
                                <input id="salary" type="number" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="Salary"required>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                      
                        
                        
                       
                          <div class="form-group">
                            <label class="col-md-4 control-label">Hired Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('date_hired') }}" name="date_hired" class="form-control pull-right" id="hiredDate" placeholder="hired date" required>
                                </div>
                            </div>
                        </div>
                          
                        
                        <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <select class="form-control select2" data-placeholder="Select Department" name="department_id"  style="width: 100%">
                                    @foreach ($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}} {{$department->unit}}</option>
                                    @endforeach
                                </select>
                                 @if ($errors->has('department_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bank_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Bank</label>
                            <div class="col-md-6">
                                <select class="form-control select2" data-placeholder="Select Bank" name="bank_id"  style="width: 100%">
                                    @foreach ($banks as $bank)
                                        <option value="{{$bank->id}}">{{$bank->name}} {{$bank->branch}}</option>
                                    @endforeach
                                </select>
                                 @if ($errors->has('bank_id'))
                                    <span class="help-block">q
                                        <strong>{{ $errors->first('bank_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="picture" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
