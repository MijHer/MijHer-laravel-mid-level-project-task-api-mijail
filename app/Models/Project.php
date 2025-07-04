<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Audit;

class Project extends Model
{
    use \OwenIt\Auditing\Auditable;

    protected $keyType = 'uuid';
    protected $fillable = ['name', 'description' , 'status'];

    public function tasks() {
        return $this->hasMany(Task::class);
    }
    use HasFactory;
}
