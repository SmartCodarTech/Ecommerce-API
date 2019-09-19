@extends('system-mgmt.penalty.base')

@section('action-content')
<div class="container">
  
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Penalty</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('penalty.store') }}">
                    
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('employee_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-6">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select Single or multiples" name="employee_id"  style="width: 100%;">
                                   
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

                        <div class="form-group{{ $errors->has('penalty_type') ? ' has-error' : '' }}">
                            <label for="credit_type" class="col-md-4 control-label">Penalty Type</label>

                            <div class="col-md-6">
                                <input id="penalty_type" type="text" class="form-control" name="penalty_type" value="{{ old('type_type') }}" placeholder="Penalty Type" required autofocus>

                                @if ($errors->has('penalty_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penalty_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('amount_division') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Penalty Amount</label>

                            <div class="col-md-6">
                                <input id="amount_division" type="number" class="form-control" name="amount_division" value="{{ old('amount_division') }}" placeholder="Salary Division number"required>

                                @if ($errors->has('amount_division'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount_division') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                
                          <div class="form-group">
                            <label class="col-md-4 control-label">Penalty Starting Date</label>
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
                            <label class="col-md-4 control-label">Penalty Ending Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('end_date') }}" name="end_date" class="form-control pull-right" id="endDate" placeholder="End date" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                 <textarea class="textarea" input id="comment" name="comment" value="{{ old('comment') }}"placeholder="Enter text" ></textarea>
                                

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
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

