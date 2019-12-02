<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Sofa extends Model
{
    use Searchable;
    protected $guarded = [];
    
    public function searchableAs()
    {
        return 'sofa_index';
    }
}
