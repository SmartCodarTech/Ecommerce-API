@extends('system-mgmt.bank.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Tax</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('tax.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('tax_type') ? ' has-error' : '' }}">
                            <label for="tax_type" class="col-md-4 control-label">Tax Name</label>

                            <div class="col-md-6">
                                <input id="tax_type" type="text" class="form-control" name="tax_type" placeholder="Tax Name" value="{{ old('tax_type') }}" required autofocus>

                                @if ($errors->has('tax_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tax_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pecentage') ? ' has-error' : '' }}">
                            <label for="percentage" class="col-md-4 control-label">Percentage of Salary</label>

                            <div class="col-md-6">
                                <input id="pecentage" type="number" class="form-control" name="pecentage" placeholder="Pecentage" value="{{ old('pecentage') }}" required autofocus>

                                @if ($errors->has('pecentage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pecentage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('organization') ? ' has-error' : '' }}">
                            <label for="percentage" class="col-md-4 control-label">Tax Institution</label>

                            <div class="col-md-6">
                                <input id="organization" type="text" class="form-control" name="organization" placeholder="organization" value="{{ old('organization') }}" required autofocus>

                                @if ($errors->has('organization'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                          <div class="form-group">
                            <label class="col-md-4 control-label">Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('tax_date') }}" name="tax_date" class="form-control pull-right" id="hiredDate" placeholder=" Date" required>
                                </div>
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
