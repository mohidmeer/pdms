<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShiftingDate extends Component
{

    public $hijri_date_conversion = null;
    public $gregorian_date = null;

    public function render()
    {
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
