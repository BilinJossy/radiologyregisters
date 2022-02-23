<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\register;
use App\Models\studydetails;
use App\Models\xray;
use App\Models\carm;
use App\Models\bmd;
use App\Models\mg;
use App\Models\us;
use App\Models\ct;
use App\Models\mri;
use App\Models\fluro;
use App\Models\redos;
use App\Models\portable;




class testcontroller extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listxray()
    {
        $data=xray::paginate(10);
        return view('listxray', compact('data'));
    }

    public function listcarm()
    {
        $data=carm::paginate(10);
        return view('listcarm', compact('data'));
    }

    public function listfluro()
    {
        $data=fluro::paginate(10);
        return view('listfluro', compact('data'));
    }

    public function listmri()
    {
        $data=mri::paginate(10);
        return view('listmri', compact('data'));
    }

    public function listct()
    {
        $data=ct::paginate(10);
        return view('listctscan', compact('data'));
    }

    public function listus()
    {
        $data=us::paginate(10);
        return view('listus', compact('data'));
    }

    public function listmg()
    {
        $data=mg::paginate(10);
        return view('listmg', compact('data'));
    }

    public function listbmd()
    {
        $data=bmd::paginate(10);
        return view('listbmd', compact('data'));
    }

    public function listportable()
    {
        $data=portable::paginate(10);
        return view('listportable', compact('data'));
    }

    public function listredos()
    {
        $data=redos::paginate(10);
        return view('listredos', compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
