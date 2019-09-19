@extends('employeer-mgmt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">List of Civilian employees</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('civilian-management.create') }}">Add new employee</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('civilian-management.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['First Name', 'Department Name'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['Firstname'] : '', isset($searchingVals) ? $searchingVals['Department name'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-14">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="5%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Picture: activate to sort column descending" aria-sort="ascending">Picture</th>
                <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Employee Name</th>
                <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Gender</th>
                 <th width="5%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Service ID</th>
                <th width="12%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Email</th>
               
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Birthdate: activate to sort column ascending">Civilian Type</th>
                  
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="HiredDate: activate to sort column ascending">Hired Date</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending">Department</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Division: activate to sort column ascending">Bank</th>
                
               
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
               
               
              </tr>
            </thead>
            <tbody>
            @foreach ($civilians as $civilian)
                <tr role="row" class="odd">
                  <td><img src="../{{$civilian->picture }}" width="50px" height="50px"/></td>
                  <td class="sorting_1">{{ $civilian->firstname }}  {{$civilian->lastname}}</td>
                  <td class="hidden-xs">{{  $civilian->gender }}</td>
                  <td class="hidden-xs">{{ $civilian->service_id }}</td>
                  <td class="hidden-xs">{{ $civilian->email }}</td>
                  
                  <td class="hidden-xs">{{ $civilian->type }}</td>
                    
                  <td class="hidden-xs">{{  $civilian->date_hired }}</td>
                  <td class="hidden-xs">{{  $civilian->department_name }}</td>
                  <td class="hidden-xs">{{  $civilian->bank_name }}</td>
                 
                  
                  <td>
                    <form class="row" method="POST" action="{{ route('civilian-management.destroy', ['id' => $civilian->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('civilian-management.edit', ['id' => $civilian->id]) }}" class="btn btn-success col-sm-3 col-xs-5 btn-margin">
                        Update
                        </a>
                         <button type="submit" class="btn btn-danger col-sm-3 col-xs-5 btn-margin">
                          Delete
                        </button>
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th width="5%" rowspan="1" colspan="1">Picture</th>
                <th width="10%" rowspan="1" colspan="1">Employee's name</th>
                <th width="5%" rowspan="1" colspan="1">Gender</th>
                <th width="5%" rowspan="1" colspan="1">Service ID</th>
                <th width="12%" rowspan="1" colspan="1">Email</th>
                <th width="12%" rowspan="1" colspan="1">Civilian Type</th>
                <th width="8%" rowspan="1" colspan="1">Hired date</th>
                <th width="8%" rowspan="1" colspan="1">Department</th>
                <th width="8%" rowspan="1" colspan="1">Bank</th>
                <th rowspan="1" colspan="2">Action</th>
               
               
               
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($civilians)}} of {{count($civilians)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $civilians->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection`