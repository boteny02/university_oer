<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    {!! Form::text('teacher_id', null, ['class' => 'form-control']) !!}
</div>

<!-- School Attended Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_attended', 'School Attended:') !!}
    {!! Form::text('school_attended', null, ['class' => 'form-control']) !!}
</div>

<!-- Certificate Awarded Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificate_awarded', 'Certificate Awarded:') !!}
    {!! Form::text('certificate_awarded', null, ['class' => 'form-control']) !!}
</div>

<!-- Graduated Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('graduated_year', 'Graduated Year:') !!}
    {!! Form::text('graduated_year', null, ['class' => 'form-control','id'=>'graduated_year']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#graduated_year').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush