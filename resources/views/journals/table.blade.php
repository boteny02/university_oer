<div class="table-responsive">
    <table class="table" id="journals-table">
        <thead>
        <tr>
            <th>Teacher Id</th>
        <th>Title</th>
        <th>Abstract</th>
        <th>Published By</th>
        <th>Published</th>
        <th>Edition Vol</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($journals as $journals)
            <tr>
                <td>{{ $journals->teacher_id }}</td>
            <td>{{ $journals->title }}</td>
            <td>{{ $journals->abstract }}</td>
            <td>{{ $journals->published_by }}</td>
            <td>{{ $journals->published }}</td>
            <td>{{ $journals->edition_vol }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['journals.destroy', $journals->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('journals.show', [$journals->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('journals.edit', [$journals->id]) }}"
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
