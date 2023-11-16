<!-- Teacher Id Field -->
<div class="col-sm-12">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $educations->teacher_id }}</p>
</div>

<!-- School Attended Field -->
<div class="col-sm-12">
    {!! Form::label('school_attended', 'School Attended:') !!}
    <p>{{ $educations->school_attended }}</p>
</div>

<!-- Certificate Awarded Field -->
<div class="col-sm-12">
    {!! Form::label('certificate_awarded', 'Certificate Awarded:') !!}
    <p>{{ $educations->certificate_awarded }}</p>
</div>

<!-- Graduated Year Field -->
<div class="col-sm-12">
    {!! Form::label('graduated_year', 'Graduated Year:') !!}
    <p>{{ $educations->graduated_year }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $educations->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $educations->updated_at }}</p>
</div>

