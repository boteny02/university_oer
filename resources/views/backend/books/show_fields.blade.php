<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $books->user_id }}</p>
</div>

<!-- Book Title Field -->
<div class="col-sm-12">
    {!! Form::label('book_title', 'Book Title:') !!}
    <p>{{ $books->book_title }}</p>
</div>

<!-- Issn Field -->
<div class="col-sm-12">
    {!! Form::label('issn', 'Issn:') !!}
    <p>{{ $books->issn }}</p>
</div>

<!-- Author Name Field -->
<div class="col-sm-12">
    {!! Form::label('author_name', 'Author Name:') !!}
    <p>{{ $books->author_name }}</p>
</div>

<!-- Published Field -->
<div class="col-sm-12">
    {!! Form::label('published', 'Published:') !!}
    <p>{{ $books->published }}</p>
</div>

<!-- Gerne Field -->
<div class="col-sm-12">
    {!! Form::label('gerne', 'Gerne:') !!}
    <p>{{ $books->gerne }}</p>
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

