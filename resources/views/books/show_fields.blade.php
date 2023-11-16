<!-- Teacher Id Field -->
<div class="col-sm-12">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $books->teacher_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $books->title }}</p>
</div>

<!-- Published Year Field -->
<div class="col-sm-12">
    {!! Form::label('published_year', 'Published Year:') !!}
    <p>{{ $books->published_year }}</p>
</div>

<!-- Publisher Field -->
<div class="col-sm-12">
    {!! Form::label('publisher', 'Publisher:') !!}
    <p>{{ $books->publisher }}</p>
</div>

<!-- Isbn Field -->
<div class="col-sm-12">
    {!! Form::label('isbn', 'Isbn:') !!}
    <p>{{ $books->isbn }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $books->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $books->updated_at }}</p>
</div>

