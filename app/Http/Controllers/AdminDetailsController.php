<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminDetails;

class AdminDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admindetail = AdminDetails::latest()->paginate(10);
        return view('admin.admin_details.index',compact('admindetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AdminDetails::create([
            'company_name' => $request -> input('company_name'),
            'address' => $request -> input('address'),
            'phone' => $request -> input('phone'),
            'state' => $request -> input('state'),
            'city' => $request -> input('city'),
            'post_code' => $request -> input('post_code'),
        ]);

        $notification = [
            'message' => 'Admin Details Created Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('admindetails.index')->with($notification);
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
        $admindetail = AdminDetails::findOrFail($id);
        return view('admin.admin_details.edit', compact('admindetail'));
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
        $admindetail = AdminDetails::findOrFail($id);
        $admindetail->update([
            'company_name' => $request -> input('company_name'),
            'address' => $request -> input('address'),
            'phone' => $request -> input('phone'),
            'state' => $request -> input('state'),
            'city' => $request -> input('city'),
            'post_code' => $request -> input('post_code'),

        ]);

        $notification = [
            'message' => 'Admin Details Created Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('admindetails.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admindetail = AdminDetails::findOrFail($id)->delete();
        $notification = [
            'message' => 'Admin Details Deleted Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('admindetails.index')->with($notification);
    }
}
