<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('Admin.Service.service')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.Service.createService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'servName' => 'required',
        //     'price' => 'required',
        // ]);

        // $service = new Service;
        // $service->servName = $request->input('servName');
        // $service->price = $request->input('price');

        // return redirect('admin/service')->with('success', 'Service Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($servID)
    {
        $service = Service::find($servID);
        return view('admin.Service.showService');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($servID)
    {
        // $service = Service::find($servID);
        // return view('Assistant.Service.editService')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $servID)
    {
        // $this->validate($request, [
        //     'servName' => 'required',
        //     'price' => 'required',
        // ]);

        // $service = Service::find($servID);
        // $service->servName = $request->input('servName');
        // $service->price = $request->input('price');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($servID)
    {
        //
    }
}
