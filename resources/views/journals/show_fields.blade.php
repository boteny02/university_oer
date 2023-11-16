<!-- Teacher Id Field -->
<div class="col-sm-12">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $journals->teacher_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $journals->title }}</p>
</div>

<!-- Abstract Field -->
<div class="col-sm-12">
    {!! Form::label('abstract', 'Abstract:') !!}
    <p>{{ $journals->abstract }}</p>
</div>

<!-- Published By Field -->
<div class="col-sm-12">
    {!! Form::label('published_by', 'Published By:') !!}
    <p>{{ $journals->published_by }}</p>
</div>

<!-- Published Field -->
<div class="col-sm-12">
    {!! Form::label('published', 'Published:') !!}
    <p>{{ $journals->published }}</p>
</div>

<!-- Edition Vol Field -->
<div class="col-sm-12">
    {!! Form::label('edition_vol', 'Edition Vol:') !!}
    <p>{{ $journals->edition_vol }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $journals->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $journals->updated_at }}</p>
</div>

