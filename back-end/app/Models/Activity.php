<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['category_id','title','description','imags','img','start_date','end_date'];


    public function activities(){
        return $this->belongsTo('App/Models/Category');
    }
}
