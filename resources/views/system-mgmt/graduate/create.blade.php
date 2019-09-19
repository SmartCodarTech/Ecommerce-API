@extends('system-mgmt.division.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new division</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('division.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Division Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Service Ranks" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">Division code</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" placeholder="ID or Service Code" value="{{ old('code') }}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Salary') ? ' has-error' : '' }}">
                            <label for="salary" class="col-md-4 control-label">Division Salary</label>

                            <div class="col-md-6">
                                <input id="salary" type="number" class="form-control" placeholder="Salary amount" name="salary" value="{{ old('salary') }}" required autofocus>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ url('graduate-management') }}" target="" class="btn btn-default"><i class="fa fa-close"></i>Cancel</a>
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Submit
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
