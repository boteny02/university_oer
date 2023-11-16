<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;

class AcademicCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicCalendars = AcademicCalendar::all();

        return view('academic_calendar.index', compact('academicCalendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academic_calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'academic_year' => 'required',
            'semester' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            ]);

            AcademicCalendar::create($request->all());

            return redirect()->route('academic_calendar.index')->with('success', 'Academic Calendar created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcademicCalendar  $academicCalendar
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicCalendar $academicCalendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcademicCalendar  $academicCalendar
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicCalendar $academicCalendar)
    {
        return view('academic_calendar.edit', compact('academic_calendar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcademicCalendar  $academicCalendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicCalendar $academicCalendar)
    {
        $request->validate([
            'academic_year' => 'required',
            'semester' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            ]);

            $academic_calendar->update($request->all());

            return redirect()->route('academic_calendar.index')->with('success', 'Academic Calendar updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcademicCalendar  $academicCalendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicCalendar $academicCalendar)
    {
        $academic_calendar->delete();
        return redirect()->route('academic_calendar.index')->with('success', 'Academic Calendar deleted successfully!');

    }
}
