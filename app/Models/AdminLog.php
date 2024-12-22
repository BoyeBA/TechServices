<?php

// app/Models/AdminLog.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    protected $fillable = [
        'admin_id',  // ID de l'admin
        'action',    // Action effectuée
        'target_id', // ID de la cible (par exemple, service)
    ];
}
