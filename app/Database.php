<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
   protected $fillable = [
        'name',
        'host',
        'port',
        'user',
        'maintenancedb',
        'password'
    ];
   
    protected $guarded = ['id', 'created_at', 'update_at'];
    
    protected $table = 'databases';
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
