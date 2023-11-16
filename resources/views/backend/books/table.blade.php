<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
        <tr>
            <th>User Id</th>
        <th>Book Title</th>
        <th>Issn</th>
        <th>Author Name</th>
        <th>Published</th>
        <th>Gerne</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $books)
            <tr>
                <td>{{ $books->user_id }}</td>
            <td>{{ $books->book_title }}</td>
            <td>{{ $books->issn }}</td>
            <td>{{ $books->author_name }}</td>
            <td>{{ $books->published }}</td>
            <td>{{ $books->gerne }}</td>
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
