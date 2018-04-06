<?php

namespace App\Http\Controllers\Assistant;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Schedule;
use Illuminate\Http\Request;

use App\Patient;
use App\Service;
use App\Dentist;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $patients = Patient::all();
        $services = Service::all();
        $dentists = Dentist::all();
        
        $perPage = 25;
        $schedules = Schedule::paginate($perPage);
        // dd($schedules);
        return view('Assistant.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $services = Service::all();
        $dentists = Dentist::all();
        $patients = Patient::all();
        return view('Assistant.schedules.create')
        ->with('services', $services)
        ->with('dentists', $dentists)
        ->with('patients', $patients);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'date' => 'required',
			'timeFrom' => 'required',
            'timeTo' => 'required',
            'opStatus',
            'dentID',
            'servID',
            'patID'
		]);
        $requestData = $request->all();
        Schedule::create($requestData);

        return redirect('assistant/schedules')->with('flash_message', 'Schedule added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $schedID
     *
     * @return \Illuminate\View\View
     */
    public function show($schedId)
    {
        $patients = Patient::all();
        $services = Service::all();
        $dentists = Dentist::all();   
        $schedule = Schedule::findOrFail($schedId);
        // dd();
        return view('Assistant.schedules.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($schedId)
    {
        $services = Service::all();
        $dentists = Dentist::all();
        $schedule = Schedule::find($schedId);
        return view('Assistant.schedules.edit', compact('schedule'))
        ->with('services',$services)
        ->with('dentists',$dentists);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $schedId)
    {
        $this->validate($request, [
			'date' => 'required',
			'timeFrom' => 'required',
            'timeTo' => 'required',
            'opStatus',
            'dentID',
            'servID',
            'patID'
		]);
        $requestData = $request->all();
        $schedule = Schedule::findOrFail($schedId);
        // $schedule->timeTo = 
        // $schedule->timeFrom =
        // $schedule->servID = 
        $schedule->update($requestData);

        // dd($requestData);

        return redirect('assistant/schedules')->with('flash_message', 'Schedule updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($schedId)
    {
        
        $item = Schedule::find($schedId);

        $item->delete();

        return redirect('assistant/schedules')->with('flash_message', 'Schedule deleted!');
    }
}
