<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShiftingDate extends Component
{

    public $hijri_date_conversion = null;
    public $gregorian_date = null;
    public $edit = false;
    public $prisoner;

    public function render()
    {
        if (request()->routeIs('prisoner.edit')) {
            $this->edit = true;
            $this->gregorian_date($this->prisoner->actual_release_date_gregorian);
        }
        return view('livewire.shifting-date');
    }

    public function gregorian_date($event)
    {
        $this->gregorian_date = $event;
        // call api get hijri date and push to hijri calendar
        $url = "http://api.aladhan.com/v1/gToH?date=" . Carbon::parse($event)->format('d-m-Y');
        $response = Http::get($url);
        $json_format = $response->json();
        $this->hijri_date_conversion = $json_format['data']['hijri']['date'];
    }
}
