<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verify;

class CertificateVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificate = Verify::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('scatter here');
        $request->validate([
            'cert_title' => 'required',
            'user_name' => 'required',
            'cert_date' => 'required',
            'cert_provider' => 'required',
            // 'tracking_code' => 'required'
        ]);
        // dd('almost');
        $verify = new Verify;

        $verify->cert_title = $request->cert_title;
        $verify->user_name = $request->user_name;
        $verify->cert_date = $request->cert_date;
        $verify->cert_provider = $request->cert_provider;

        // Generate random number between 1000 and 9999
        $randomNumber = rand(1000, 9999);

        // Concatenate 'SOZOILFIELD' with the random number
        $trackingCode = 'SOZOILFIELD' . $randomNumber;

        $verify->tracking_code = $trackingCode;

        $verify->save();
        return redirect('admin/dashboard');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
