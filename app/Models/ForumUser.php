<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumUser extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = "forumusers"; // otherwise Eloquent will look for 'forum_user', because of the 'U' inside ForumUser

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

}
