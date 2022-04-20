<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eextracharge;

class ExtraChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Eextracharge::latest()->paginate(10);
        return view('admin.ExtraCharge.index',compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ExtraCharge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Eextracharge::create([
            'extracharge' => $request -> input('extra_charge'),
        ]);

        $notification = [
            'message' => 'ExtraCharge Created Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('extracharge.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extras = Eextracharge::findOrFail($id);
        return view('admin.ExtraCharge.edit', compact('extras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $extracharge = Eextracharge::findOrFail($id);
        $extracharge->update([
            'extracharge' => $request -> input('extra_charge'),

        ]);

        $notification = [
            'message' => 'ExtraCharge Created Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('extracharge.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Eextra = Eextracharge::findOrFail($id)->delete();
        $notification = [
            'message' => 'ExtraCharge Deleted Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('extracharge.index')->with($notification);
    }
}
