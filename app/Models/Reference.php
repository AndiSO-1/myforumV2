<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
    * The opinions that quote this reference
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function opinions()
    {
        return $this->belongsToMany(Opinion::class); // here we specify table and keys because the order of the fields in the table does not comply with the convention
    }
}
