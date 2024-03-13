<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentasAuditoria extends Model
{
    use HasFactory;


    public $fillable = [

        'id_vicidial',
        'sponsor',
        'status_name',
        'phone_number',
        'first_name',
        'middle_name',
        'last_name',
        'comments',
        'ventas_vicidials',
    ] ;


    public $protected = [

        'phone_number',
        'first_name',
        'middle_name',
        'last_name',

    ] ;

    public $cast = [

        'phone_number'=> 'Encrypted',
        'first_name'=> 'Encrypted',
        'middle_name'=> 'Encrypted',
        'last_name'=> 'Encrypted',

    ] ;





}
