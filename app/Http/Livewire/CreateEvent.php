<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CalendarEvent as EventModel;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreateEvent extends Component
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
	
	public $debug = true;
	
    public function render()
    {
		//dd('CreateEvent');
        return view('livewire.create-event');
    }
	
	public function saveEvent()
    {
		//dd('saveEvent :: before Validate');
        /*$this->validate([
			'type' => 'required',	
			'meeting_address' => 'required',
			'location' => 'required',
			'calendar_type' => 'required',
			'language' => 'required',
			'all_day' => 'required|in:1,0',
			'timezone' => 'required',
            'start_date_time' => 'required|date_format:Y-m-d\TH:i|date',
            'end_date_time' => 'required||date_format:Y-m-d\TH:i|after:start_date_time',
			'heading_1' => 'required',
			'heading_2' => 'required',
			'heading_3' => 'required',
			'calendar_link' => 'required|url',
			'calendar_profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);*/

		//Uploading File and Getting full file path
		$path = $this->calendar_profile_image->store('calendar_profile_image', 'public');
		$fullLink = Storage::disk('public')->url($path);

        EventModel::create([
            'type' => $this->type,
            'meeting_address' => $this->meeting_address,
            'location' => $this->location,
            'calendar_type' => $this->calendar_type,
            'language' => $this->language,
            'all_day' => $this->all_day,
            'timezone' => $this->timezone,
            'start_date_time' => $this->start_date_time,
            'end_date_time' => $this->end_date_time,
            'heading_1' => $this->heading_1,
            'heading_2' => $this->heading_2,
            'heading_3' => $this->heading_3,
            'calendar_link' => $this->calendar_link,
            'calendar_profile_image' => $fullLink,
			
        ]);
		
        $this->resetForm();
		$this->emit('flashMessage', 'success', 'Form submitted successfully');
    }
	
	    private function resetForm()
    {
        $this->type = '';
        $this->meeting_address = '';
        $this->location = '';
        $this->calendar_type = '';
        $this->language = '';
        $this->all_day = '';
        $this->timezone = '';
        $this->start_date_time = '';
        $this->end_date_time = '';
        $this->heading_1 = '';
        $this->heading_2 = '';
        $this->heading_3 = '';
        $this->calendar_link = '';
		$this->reset('calendar_profile_image');

    }
}
