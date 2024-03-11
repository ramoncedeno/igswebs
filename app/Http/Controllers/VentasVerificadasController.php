<?php

namespace App\Http\Controllers;

use App\Models\VentasVerificadas;
use Illuminate\Http\Request;

class VentasVerificadasController extends Controller
{


    'confirmation_id'->$confirmation-> confirmacion_id,
    'audit_id'->$confirmation->audit_id,
    'lead_id'->$confirmation->lead_id,
    'vendor_lead_code'->$confirmation->vendor_lead,
    'status_name'->$confirmation->clasification,
    'comments'->$confirmation->comment,

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
    public function show(VentasVerificadas $ventasVerificadas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VentasVerificadas $ventasVerificadas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VentasVerificadas $ventasVerificadas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VentasVerificadas $ventasVerificadas)
    {
        //
    }
}
