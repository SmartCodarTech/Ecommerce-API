@extends('system-mgmt.course.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Courses</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('course.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('tax_type') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Course name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Course" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group {{ $errors->has('cat_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">
                                <select class="form-control select2"  data-placeholder="Select catgory"name="cat_id"  style="width: 100%;">
                                   
                                    @foreach ($categorys as $category)

                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                 @if ($errors->has('cat_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     
                        <div class="col-xs-12">
          <a href="{{ url('system-management/course') }}" target="" class="btn btn-default"><i class="fa fa-close"></i>Cancel</a>
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
