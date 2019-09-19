@extends('system-mgmt.premium.base')

@section('action-content')
<div class="container">
    
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Premium</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('premium.store') }}">
                    
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('employee_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-6">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select Single or multiples"name="employee_id"  style="width: 100%;">
                                   
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

                        <div class="form-group{{ $errors->has('premium_type') ? ' has-error' : '' }}">
                            <label for="premium_type" class="col-md-4 control-label">Premium Type</label>

                            <div class="col-md-6">
                                <input id="premium_type" type="text" class="form-control" name="premium_type" value="{{ old('premium_type') }}" placeholder="Premium Type" required autofocus>

                                @if ($errors->has('premium_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('premium_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Premium Amount</label>

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
                            <label class="col-md-4 control-label">Premium Starting Date</label>
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
                            <label class="col-md-4 control-label">Premium Ending Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('end_date') }}" name="end_date" class="form-control pull-right" id="endDate" placeholder="End date" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group{{ $errors->has('premium_purpose') ? ' has-error' : '' }}">
                            <label for="premium_purpose" class="col-md-4 control-label">Premium Purpose</label>

                            <div class="col-md-6">
                                 <textarea class="textarea" input id="premium_purpose" name="premium_purpose" value="{{ old('premium_purpose') }}"placeholder="Enter text" ></textarea>
                                

                                @if ($errors->has('premium_purpose'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('premium_purpose') }}</strong>
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
  

@endsection

