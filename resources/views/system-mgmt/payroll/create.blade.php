@extends('system-mgmt.credit.base')

@section('action-content')
<div class="container">
    
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Civilian Payroll</div>
                
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('payroll.store',['id'=>$civilian->id]') }}">
                    
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('employee_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-6">
                                <select class="form-control select2"  multiple="multiple" data-placeholder="Select a Employee's name" name="employee_id[]"  style="width: 100%;">
                                   
                                    @foreach ($employees as $employees)

                                        <option value="{{$employees->id}}">{{$employees->firstname}} {{$employees->lastname}}</option>
                                    @endforeach
                                </select>
                                 @if ($errors->has('employee_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employees_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('credit_type') ? ' has-error' : '' }}">
                            <label for="over_time" class="col-md-4 control-label">Over Time</label>

                            <div class="col-md-6">
                                <select class="form-control"   data-placeholder="Select" name="over_time" ">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                   
                                </select>
                                @if ($errors->has('over_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('over_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hours') ? ' has-error' : '' }}">
                            <label for="hours" class="col-md-4 control-label">Hours</label>

                            <div class="col-md-6">
                                <input id="hours" type="number" class="form-control" name="hours" value="{{ old('hours') }}" placeholder=" Hours"required>

                                @if ($errors->has('hours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hours') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rate') ? ' has-error' : '' }}">
                            <label for="rate" class="col-md-4 control-label">Rate</label>

                            <div class="col-md-6">
                                <input id="rate" type="number" class="form-control" name="rate" value="{{ old('rate') }}" placeholder=" rate"required>

                                @if ($errors->has('rate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('hours') ? ' has-error' : '' }}">
                            <label for="hours" class="col-md-4 control-label">Hours</label>

                            <div class="col-md-6">
                                <input id="hours" type="number" class="form-control" name="hours" value="{{ old('hours') }}" placeholder=" Hours"required>

                                @if ($errors->has('hours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hours') }}</strong>
                                    </span>
                                @endif
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
}
</script>

@endsection

