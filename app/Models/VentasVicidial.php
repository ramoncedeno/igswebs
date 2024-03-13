<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentasVicidial extends Model
{
    use HasFactory;

    // public $table ='relatorio_ventas'; << forma de enmascarar la tabla

    public $fillable = [

        'sponsor',
        'vendor_lead_code',
        'call_date',
        'campaign_id',
        'user_id',
        'user_name',
        'phone_number',
        'status_name',
        'first_name',
        'middle_name',
        'last_name',
        'lead_id',
        'comments',
        'server',

    ];

    //model

    public $protected =[

        'vendor_lead_code',
        'phone_number',
        'first_name',
        'middle_name',
        'last_name',
        'server',

    ];


    //$cast

    public $cast =[

        'call_date'=>'timestamp',
        'vendor_lead_code'=>'encrypted',
        'phone_number'=>'encrypted',
        'first_name'=>'encrypted',
        'middle_name'=>'encrypted',
        'last_name'=>'encrypted',
    
    ];




}
