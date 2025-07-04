<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Audit;

class Task extends Model
{
    use \OwenIt\Auditing\Auditable;

    protected $keyType = 'uuid';
    protected $fillable = ['project_id', 'title' , 'status', 'priority', 'due_date'];

    public function project() {
        return $this->belongsTo(Project::class);
    }
    use HasFactory;
}
