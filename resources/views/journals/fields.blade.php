<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    {!! Form::text('teacher_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Abstract Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('abstract', 'Abstract:') !!}
    {!! Form::textarea('abstract', null, ['class' => 'form-control']) !!}
</div>

<!-- Published By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published_by', 'Published By:') !!}
    {!! Form::text('published_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Published:') !!}
    {!! Form::text('published', null, ['class' => 'form-control','id'=>'published']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#published').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Edition Vol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edition_vol', 'Edition Vol:') !!}
    {!! Form::text('edition_vol', null, ['class' => 'form-control']) !!}
</div>