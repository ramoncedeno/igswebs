<?php

namespace App\Http\Controllers;

use App\Models\VentasAuditoria;
use Illuminate\Http\Request;

class VentasAuditoriaController extends Controller
{
    VentasAuditoria::create([

        'audit_id'=>$auditoria-> audit_id,
        'lead_id'=>$auditoria->lead_id,
        'sponsor'=> $auditoria->sponsor,
        'status_name'=>$auditoria->status_name,
        'phone_number'=>$auditoria->phone_number,
        'first_name'=>$auditoria->irst_name,
        'middle_name'=>$auditoria->middle_name,
        'last_name'=>$auditoria->last_name,
        'timestamps'=>$auditoria->timestamps,
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
    public function show(VentasAuditoria $ventasAuditoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VentasAuditoria $ventasAuditoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VentasAuditoria $ventasAuditoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VentasAuditoria $ventasAuditoria)
    {
        //
    }
}
