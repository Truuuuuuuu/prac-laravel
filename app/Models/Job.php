<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToAlias;

class Job extends Model {

    use HasFactory;

    protected $table =  'job_listings';

    protected $guarded = []; //mass assignment responsibly




    public function employer(): BelongsToAlias
    {
        return $this->belongsTo(Employer::class);
    }
}
