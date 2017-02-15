@extends('layouts.main')

@section('content')

{!! Form::open(array('url' => route('jobposts.store') ,'class' => 'form','method' =>'POST')) !!}
   {!! Form::label('job_title', 'Job Title')!!}
   {!! Form::text('job_title', null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('job_type', 'Job Type')!!}
   {!! Form::select('job_type',['Full Time' => 'Full time','Part Time' =>'Part Time','Internships' => 'Internships','Work from home' => 'Work from home'],array(['placeholder' => 'Select Job Type'],['class' => 'form-control'])) !!}
   <br/>
   {!! Form::label('designation','Designation') !!}
   {!! Form::text('designation',null,['class' => 'form-control']) !!}
   <br/>
   <br/>
   {!! Form::label('qualification','Qualification') !!}
   {!! Form::text('qualification',null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('job_location','Job Location') !!}
   {!! Form::text('job_location',null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('experience','Experience') !!}
   {!! Form::text('experience',null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('skills','Skills') !!}
   {!! Form::text('skills',null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('job_description','Job Description') !!}
   {!! Form::textarea('job_description',null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('job_condition','Job Condition') !!}
   {!! Form::textarea('job_condition',null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('salary','Salary') !!}
   {!! Form::text('salary',null, ['class' => 'form-control']) !!}
   <br/>
   {!! Form::label('last_date_for_application','Last Date For Application') !!}
   {!! Form::Date('last_date_for_application',null, ['class' => 'form-control']) !!}
   <br/>
   <input type="hidden" name="user_id" value="{{ Auth::guard('recruiter')->user()->id }}">
   {!! Form::label('number_of_vacanies','Number Of Vacanies') !!}
   {!! Form::text('number_of_vacanies',null, ['class' => 'form-control']) !!}

   {!!Form::token()!!}
   <br/>
   {!! Form::submit('Save', array('class'=>'btn btn-success pull-right')) !!}
    {!! Form::close() !!}</div></div>
</div>


  
@endsection