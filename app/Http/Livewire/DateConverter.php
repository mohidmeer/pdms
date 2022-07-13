<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class DateConverter extends Component
{

    public $hijri_date = null;
    public $gregorian_detention_date = null;
    public $hijri_detention_date = null;
    public $edit = false;
    public $prisoner;

    public function render()
    {
        if (request()->routeIs('prisoner.edit'))
        {
            $this->edit = true;
            $this->gregorian_detention_date($this->prisoner->gregorian_detention_date);
        }
        return view('livewire.date-converter');
    }


    public function gregorian_detention_date($event)
    {

        $this->gregorian_detention_date = $event;

        // call api get hijri date and push to hijri calendar
        $url = "http://api.aladhan.com/v1/hToG?date" . Carbon::parse($event)->format('d-m-Y');
        $response = Http::get($url);
        $json_format = $response->json();
//        $this->hijri_date = Carbon::createFromFormat('d-m-Y', $json_format['data']['hijri']['date'])->format('Y-m-d');
        $this->hijri_date = $json_format['data']['hijri']['date'];

    }



    public function hijri_detention_date($event)
    {
        $this->hijri_detention_date = $event;
        // call api get hijri date and push to hijri calendar
        $url = "http://api.aladhan.com/v1/hToG?date=" . Carbon::parse($this->hijri_detention_date)->format('d-m-Y');
        $response = Http::get($url);
        $json_format = $response->json();

//        $this->hijri_date = Carbon::createFromFormat('d-m-Y', $json_format['data']['hijri']['date'])->format('Y-m-d');
        $this->gregorian_detention_date = Carbon::createFromFormat('d-m-Y',$json_format['data']['gregorian']['date'])->format('Y-m-d');
    }
}
