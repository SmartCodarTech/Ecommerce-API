@extends('system-mgmt.education.base')

@section('action-content')
<div class="container">
    
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Educational  Detail</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('education.store') }}">
                    
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
                            <label for="credit_type" class="col-md-4 control-label">Credit Type</label>

                            <div class="col-md-6">
                                <input id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" placeholder="Credit Type" required autofocus>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Credit Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" placeholder=" Premium Amount"required>

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                
                          <div class="form-group">
                            <label class="col-md-4 control-label">Credit Starting Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('start_date') }}" name="start_date" class="form-control pull-right" id="hiredDate" placeholder="Starting Date" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Credit Ending Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('end_date') }}" name="end_date" class="form-control pull-right" id="endDate" placeholder="End date" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group{{ $errors->has('credit_purpose') ? ' has-error' : '' }}">
                            <label for="credit_purpose" class="col-md-4 control-label">Credit Purpose</label>

                            <div class="col-md-6">
                                 <textarea class="textarea" input id="credit_purpose" name="credit_purpose" value="{{ old('credit_purpose') }}"placeholder="Enter text" ></textarea>
                                

                                @if ($errors->has('credit_purpose'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('credit_purpose') }}</strong>
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

