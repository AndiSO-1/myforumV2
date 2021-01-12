<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function theme()
   {
       return $this->belongsTo(Theme::class);
   }

   public function opinions()
   {
       return $this->hasMany(Opinion::class);
   }

   /**
    * The user who submitted the topic
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function state()
   {
       return $this->belongsTo(State::class);
   }
}
