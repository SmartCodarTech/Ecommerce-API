@extends('system-mgmt.penalty.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">Penalties Management</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('penalty.create') }}">Add new Penalties</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('penalty.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['Penalty' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['Name'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['name'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="5%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Picture: activate to sort column descending" aria-sort="ascending">Picture</th>
                <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="country: activate to sort column ascending">Full Name</th>
                <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="country: activate to sort column ascending">Rank</th>
             
                <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="country: activate to sort column ascending">Offence Type</th>
                <th width="8%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="country: activate to sort column ascending">Amount Division</th>
                 <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="country: activate to sort column ascending">Start Date</th>
                 <th width="10%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="country: activate to sort column ascending">End Date</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($penaltys as $penalty)
                <tr role="row" class="odd">
                  <td><img src="../{{$penalty->employees_picture }}" width="50px" height="50px"/></td>
                  <td class="sorting_1">{{ $penalty->employees_firstname }}  {{$penalty->employees_lastname}}</td>
                  <td class="hidden-xs">{{ $penalty->division_name }}</td>
                 
                  
                  <td>{{ $penalty->comment }}</td>
                  <td>{{ $penalty->amount_division }}</td>
                  <td>{{ $penalty->start_date }}</td>
                  <td>{{ $penalty->end_date }}</td>

                  <td>
                    <form class="row" method="POST" action="{{ route('penalty.destroy', ['id' => $penalty->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('penalty.edit', ['id' => $penalty->id]) }}" class="btn btn-info col-sm-3 col-xs-5 btn-margin">
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
                <th width="10%" rowspan="1" colspan="1">Rank</th>
                <th width="10%" rowspan="1" colspan="1">Offence Type</th>
                <th width="8%" rowspan="1" colspan="1">Amount Division</th>
                <th width="10%" rowspan="1" colspan="1">Starting Date</th>
                <th width="10%" rowspan="1" colspan="1">Ending date</th>
               
                <th rowspan="1" colspan="2">Action</th>
              </tr>
            </tfoot>
          </table>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($penaltys)}} of {{count($penaltys)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $penaltys->links() }}
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
@endsection