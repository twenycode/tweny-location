<?php

namespace TwenyCode\TwenyLocation\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /* The attributes that are mass assignable */
    protected $fillable = [ 'name', 'descriptions', 'parent_id'];

    // Get list of locations
    public function getNameList()
    {
        $locations = cache()->remember('locations',30*60,function () {
            return $this->select('id','name')->get();
        });
        return $locations;
    }


}
