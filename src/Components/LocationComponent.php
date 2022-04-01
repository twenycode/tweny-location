<?php

namespace TwenyCode\TwenyLocation\Components;

use App\Models\Location;
use Illuminate\View\Component;

class LocationComponent extends Component
{
    public $name;
    public $value;
    public $id;
    public $locations;

    /* Create a new component instance. */
    public function __construct(Location $location, $value = null,$name = 'location_id',$id='locations')
    {
        $this->name = $name;
        $this->value = $value;
        $this->id = $id;
        $this->locations = $location->getNameOnly();
    }


    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.location-component');
    }
}
