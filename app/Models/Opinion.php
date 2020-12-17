<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function topic()
    {
        return $this->belongsTo(Opinion::class);
    }

    /**
    * The user who emitted the opinion
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function forumuser()
    {
        return $this->belongsTo(ForumUser::class);
    }

    public function references()
    {
        return $this->belongsToMany(Reference::class); // here we specify table and keys because the order of the fields in the table does not comply with the convention
    }

}
