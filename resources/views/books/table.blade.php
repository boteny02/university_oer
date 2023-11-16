<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
        <tr>
            <th>Teacher Id</th>
        <th>Title</th>
        <th>Published Year</th>
        <th>Publisher</th>
        <th>Isbn</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $books)
            <tr>
                <td>{{ $books->teacher_id }}</td>
            <td>{{ $books->title }}</td>
            <td>{{ $books->published_year }}</td>
            <td>{{ $books->publisher }}</td>
            <td>{{ $books->isbn }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['books.destroy', $books->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$books->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('books.edit', [$books->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
