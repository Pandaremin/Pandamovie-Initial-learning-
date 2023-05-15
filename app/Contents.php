<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    protected $fillable = [
        'id', 'title', 'poster','download1','download2','info','rating','releasedate','duration','trailer','genre1','genre2','genre3','agerestriction','sub','views'
     ];
}
