@extends('system-mgmt.schools.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Schools</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('schools.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">School Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Schools Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Institution Type</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" placeholder="Institution Type" value="{{ old('type') }}" required autofocus>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Locarion of Institution</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" placeholder="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                          
                                      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ url('system-management/schools') }}" target="" class="btn btn-default"><i class="fa fa-close"></i>Cancel</a>
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
