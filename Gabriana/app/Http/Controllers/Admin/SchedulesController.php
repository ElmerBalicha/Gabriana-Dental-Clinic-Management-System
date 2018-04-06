<?php

namespace App\Http\Controllers\Admin;

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
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $schedules = Schedule::where('date', 'LIKE', "%$keyword%")
                ->orWhere('timeFrom', 'LIKE', "%$keyword%")
                ->orWhere('timeTo', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $schedules = Schedule::paginate($perPage);
        }

        return view('admin.schedules.index', compact('schedules'));
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
        // foreach($services as $service){   working
        //     $item = $service;
        //     echo($item);
        // }


        return view('Admin.schedules.create')->with('services', $services)->with('dentists', $dentists)->with('patients', $patients);
        
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
            'patID',
            'dentID',
            'servID'
		]);
        $requestData = $request->all();
        
        Schedule::create($requestData);

        return redirect('admin/schedules')->with('flash_message', 'Schedule added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($schedId)
    {
        $services = Service::all();
        $dentists = Dentist::all();
        $patients = Dentist::all();
        $schedule = Schedule::findOrFail($schedId);

        return view('admin.schedules.show', compact('schedule'));
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
        $schedule = Schedule::findOrFail($schedId);

        return view('admin.schedules.edit', compact('schedule'));
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
        $schedule->update($requestData);

        return redirect('admin/schedules')->with('flash_message', 'Schedule updated!');
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

        return redirect('admin/schedules')->with('flash_message', 'Schedule deleted!');
    }
}
