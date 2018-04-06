<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Patient;
use App\Schedule;
use App\Dentist;
use Carbon\Carbon;

class pagesController extends Controller
{

    public function assistant()
    {
        $services = Service::all();
        $patients = Patient::all();
        $schedules = Schedule::all();
        $dentists = Dentist::all();
        $sCount = $schedules->count();
        $sCountToday = 0;
        $finishedSched = 0;
        $pCount = 0;
        $today = Carbon::now()->toDateString();
        $aptPerDentistT = 0;

        foreach($patients as $patient){
            if($patient->patStatus == 'active' || $patient->patStatus == 'Active'){
                $pCount++;
            }
        }

        foreach($schedules as $schedule){
            if($schedule->date == $today){
                $sCountToday++;
            }
        }

        foreach($schedules as $schedule){
            if($schedule->date == $today and $schedule->opStatus != 'Done'){
                $finishedSched++;
            }
        }

        foreach($dentists as $dentist){
            foreach($schedules as $schedule){
                if($schedule->dentID == $dentist->dentID and $schedule->date == $today){
                    $aptPerDentistT++;
                }
            }
        }

        return view('Assistant.Dashboard.assistant')
        ->with('services', $services)
        ->with('pCount', $pCount)
        ->with('sCountToday', $sCountToday)
        ->with('sCount', $sCount)
        ->with('fSched', $finishedSched)
        ->with('dentists', $dentists)
        ->with('schedules', $schedules)
        ->with('today', $today);

    }
    public function admin()
    {
        $services = Service::all();
        $patients = Patient::all();
        $schedules = Schedule::all();
        $dentists = Dentist::all();
        $sCount = $schedules->count();
        $sCountToday = 0;
        $finishedSched = 0;
        $pCount = 0;
        $today = Carbon::now()->toDateString();

        foreach($patients as $patient){
            if($patient->patStatus == 'active' || $patient->patStatus == 'Active'){
                $pCount++;
            }
        }

        foreach($schedules as $schedule){
            if($schedule->date == $today){
                $sCountToday++;
            }
        }

        foreach($schedules as $schedule){
            if($schedule->date == $today and $schedule->opStatus == 'Pending'){
                $finishedSched++;
            }
        }
        return view('Admin.Dashboard.admin')
        ->with('services', $services)
        ->with('pCount', $pCount)
        ->with('sCountToday', $sCountToday)
        ->with('sCount', $sCount)
        ->with('fSched', $finishedSched)
        ->with('dentists', $dentists)
        ->with('schedules', $schedules)
        ->with('today', $today);
    }

    public function log()
    {
        return view('auth.login');
    }
}
