<!-- Regular Input -->
<div class="mb-3 pt-0">
    <input type="text" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full"/>
  </div>




<!-- User Id Field -->
    <input type = "hidden" name = "user_id" value = "{{Auth::user()->id}}">
</div>

<!-- Book Title Field -->
<div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">

    {!! Form::label('book_title', 'Book Title:') !!}
    {!! Form::text('book_title', null, ['class' => 'px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full']) !!}
</div>

<!-- Issn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issn', 'Issn:') !!}
    {!! Form::text('issn', null, ['class' => 'px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full']) !!}
</div>

<!-- Author Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_name', 'Author Name:') !!}
    {!! Form::text('author_name', null, ['class' => 'px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full']) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Published:') !!}
    {!! Form::text('published', null, ['class' => 'px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full','id'=>'published']) !!}
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

<!-- Gerne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gerne', 'Gerne:') !!}
    {!! Form::text('gerne', null, ['class' => 'px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full']) !!}
</div>
