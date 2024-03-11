<?php

namespace App\Http\Controllers;

use App\Models\VentasVicidial;
use Illuminate\Http\Request;

class VentasVicidialController extends Controller
{

    VentasVicidial::create([

        'lead_id'=> $vicidial->id,
       'vendor_lead_code'=> $vicidial->vendor_id,
        'code_country'  => $vicidial->Contry_name,
        'sponsor'=> $vicidial->sponsor,
        'call_date'=> $vicidial->call_date,
        'campaign_id'=> $vicidial->campain_id,
        'user_tmk'=> $vicidial->user_id,
        'phone_number' => $vicidial->phone_number,
        'status_name'=> $vicidial->status_name,
        'first_name'=> $vicidial->first_name,
        'middle_name'$vicidial-> middle_name,
        'last_name'=> $vicidial->last_name,
        'comments'=> $vicidial->comments,
        'recording_filename'=> $vicidial-> audio_id,
        'recording_location' => $vicidial->audito_route,
        'timestamps'=> $vicidial-> timestamp,
    ]);

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VentasVicidial $ventasVicidial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VentasVicidial $ventasVicidial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VentasVicidial $ventasVicidial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VentasVicidial $ventasVicidial)
    {
        //
    }
}
