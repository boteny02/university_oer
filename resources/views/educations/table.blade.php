<div class="table-responsive">
    <table class="table" id="educations-table">
        <thead>
        <tr>
            <th>Teacher Id</th>
        <th>School Attended</th>
        <th>Certificate Awarded</th>
        <th>Graduated Year</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($educations as $educations)
            <tr>
                <td>{{ $educations->teacher_id }}</td>
            <td>{{ $educations->school_attended }}</td>
            <td>{{ $educations->certificate_awarded }}</td>
            <td>{{ $educations->graduated_year }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['educations.destroy', $educations->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('educations.show', [$educations->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('educations.edit', [$educations->id]) }}"
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
