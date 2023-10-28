<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verify;

class CertificationVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('verify');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function check($tracking_code)
    {
        // $track = Verify::where('tracking_code', $tracking_code)->first();

        // if($track){
        //     return view('check_cert', compact('track'));
        // } else {
        //     return view('invalid');
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function create(Request $request)
     {
         $request->validate([
             'tracking_code' => 'required',
         ]);

         $trackingCode = $request->input('tracking_code');

         $track = Verify::where('tracking_code', $trackingCode)->first();

         if ($track) {
             return view('check_cert', compact('track'));
         } else {
             return view('invalid');
         }
     }



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
