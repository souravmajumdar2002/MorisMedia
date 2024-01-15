<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\CalendarEvent as EventModel;
use Livewire\WithFileUploads; 

class CalendarEvents extends Component
{
	use WithFileUploads;
	
	public $type;	
    public $meeting_address;
    public $location;
    public $calendar_type;
    public $language;
	public $all_day;
    public $timezone;
	public $start_date_time;
    public $end_date_time;
    public $heading_1;
    public $heading_2;
    public $heading_3;
    public $calendar_link;
    public $calendar_profile_image;
	
	public function mount()
    {
        $this->currentMonth = Carbon::now()->format('m');
        $this->currentYear = Carbon::now()->format('Y');
    }

    public function render()
    {
		$months = [];
        $events = EventModel::all();
		/*$weekDays = [
					'sun'=>'Sunday',
					'mon'=>'Monday',
					'tue'=>'Tuesday',
					'wed'=>'Wednesday',
					'thu'=>'Thursday',
					'fri'=>'Friday',
					'sat'=>'Saturday'
					];
		$months = [
					'January' => '31',
					'February' => '28',
					'March' => '31',
					'April' => '30',
					'May' => '31',
					'June' => '30',
					'July' => '31',
					'August' => '31',
					'September' => '30',
					'October' => '31',
					'November' => '30',
					'December' => '31',
				];*/
				

for ($i = 1; $i <= 12; $i++) {
    $month = Carbon::create(null, $i, 1);
    $months[$i] = $month->format('F');
}
		$firstDayOfMonth = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $daysInMonth = $firstDayOfMonth->daysInMonth;
        $startDayOfWeek = $firstDayOfMonth->dayOfWeek;

        $monthName = Carbon::now()->format('F');
		//dd($monthName);
        $daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
		
        return view('livewire.calendar-events', [
			'events' => $events,
			'months' =>  $months,
            'monthName' => $monthName,
            'daysOfWeek' => $daysOfWeek,
            'daysInMonth' => $daysInMonth,
            'startDayOfWeek' => $startDayOfWeek,
        ]);
    }

    public function saveEvent()
    {
        $this->validate([
            'calendar_type' => 'required',
            'start_date_time' => 'required|date',
            'end_date_time' => 'required|date|after:start_date_time',
        ]);

        EventModel::create([
            'calendar_type' => $this->calendar_type,
            'start_date_time' => $this->start_date_time,
            'end_date_time' => $this->end_date_time,
        ]);

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->calendar_type = '';
        $this->start_date_time = '';
        $this->end_date_time = '';
    }
	
	    public function redirectToCreateEvent()
    {
		dd('redirectToCreateEvent');
        return redirect()->route('livewire.add-events');
    }
}
