@extends('system-mgmt.skills.base')

@section('action-content')
<div class="container">
    
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Job Experience and Skills</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('skills.store') }}">
                    
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('personal_skill') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Personal Skills</label>
                            <div class="col-md-6">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select Single or Multiples" name="personal_skill"  style="width: 100%;">
                                   
                                   

                                        <option value="Communication">Communication</option>
                                        <option value="Ability to Work Under Pressure">Ability to Work Under Pressure</option>
                                        <option value="Decision Making.">Decision Making.</option>
                                         <option value="Time Management.">Time Management.</option>
                                         <option value="Self-motivation.">Self-motivation.</option>
                                         <option value="Conflict Resolution.">Conflict Resolution.</option>
                                        <option value="Leadership.">Leadership.</option>
                                         <option value="Adaptability.">Adaptability.</option>
                                          <option value="Teamwork.">Teamwork.</option>
                                           <option value="Creativity.">Creativity.</option>




                                    
                                </select>
                                 @if ($errors->has('personal_skill'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('personal_skill') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('job_skill') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Personal Skills</label>
                            <div class="col-md-6">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select Single or Multiples" name="job_skill"  style="width: 100%;">
                                   
                                   

                                        <option value="Listening">Listening</option>
                                        <option value="Negotiation">Negotiation</option>
                                        <option value="Nonverbal communication">Nonverbal communication</option>
                                         <option value="Persuasion">Persuasion</option>
                                         <option value="Presentation">Presentation</option>
                                         <option value="Public speaking">Public speaking</option>
                                        <option value="Reading body language">Reading body language</option>
                                         <option value="Storytelling">Storytelling</option>
                                          <option value="Verbal communication.">Verbal communication</option>
                                           <option value="Visual communication">Visual communication</option>
                                           <option value="Writing reports and proposals">Writing reports and proposals</option>
                                           <option value="Writing skills">Writing skills</option>
                                            <option value="Tolerance of change and uncertainty">Tolerance of change and uncertainty</option>
                                            <option value="Willingness to learn">Willingness to learn</option>
                                             <option value="Networking">Networking </option>





                                    
                                </select>
                                 @if ($errors->has('personal_skill'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('personal_skill') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('working_experience') ? ' has-error' : '' }}">
                            <label for="credit_type" class="col-md-4 control-label">Years Working Experience</label>

                            <div class="col-md-6">
                                <input id="working_experience" type="number" class="form-control" name="working_experience" value="{{ old('working_experience') }}" placeholder="Years of Working Experience" required autofocus>

                                @if ($errors->has('working_experience'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('working_experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('work_place') ? ' has-error' : '' }}">
                            <label for="work_place" class="col-md-4 control-label">Organization </label>

                            <div class="col-md-6">
                                <input id="work_place"type="text" class="form-control" name="work_place" value="{{ old('work_place') }}" placeholder=" Work Place"required>

                                @if ($errors->has('work_place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('organization') ? ' has-error' : '' }}">
                            <label for="organization" class="col-md-4 control-label">Organization or Institution</label>

                            <div class="col-md-6">
                                <input id="organization" type="text" class="form-control" name="organization" value="{{ old('organization') }}" placeholder=" Financial Institution"required>

                                @if ($errors->has('organization'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                
                          <div class="form-group">
                            <label class="col-md-4 control-label"> Starting Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('job_skill_year') }}" name="job_skill_year" class="form-control pull-right" id="hiredDate" placeholder="Starting Date" required>
                                </div>
                            </div>
                        </div>
                         
                
                        
                       
                        
                        
        <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ url('system-management/skills') }}" target="" class="btn btn-default"><i class="fa fa-close"></i>Cancel</a>
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
}
</script>

@endsection

