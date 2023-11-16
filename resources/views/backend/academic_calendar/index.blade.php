@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Academic Calendars</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('academic_calendar.create') }}" class="btn btn-primary mb-3">Add New Academic
                                Calendar</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Academic Year</th>
                                    <th>Semester</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($academicCalendars as $academicCalendar)
                                    <tr>
                                        <td>{{ $academicCalendar->id }}</td>
                                        <td>{{ $academicCalendar->academic_year }}</td>
                                        <td>{{ $academicCalendar->semester }}</td>
                                        <td>{{ $academicCalendar->start_date }}</td>
                                        <td>{{ $academicCalendar->end_date }}</td>
                                        <td>
                                            <a href="{{ route('academic_calendar.edit', $academicCalendar->id) }}"
                                                class="btn btn-primary">Edit</a>

                                            <form action="{{ route('academic_calendar.destroy', $academicCalendar->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
