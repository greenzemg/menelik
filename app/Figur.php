<?php

namespace Menelik;

use Illuminate\Database\Eloquent\Model;

class Figur extends Model
{
   /*Attributes*/
   protected $table = 'figures';

   protected $fillable = ['figurable_id', 'figurable_type', 'fig_path'];

   /*Model Relationships*/
   public function figurable()
   {
   		return $this->morphTo();
   }
}
