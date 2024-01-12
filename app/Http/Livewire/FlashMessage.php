<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FlashMessage extends Component
{
	protected $listeners = ['flashMessage' => 'setFlashMessage'];

    public $type;
    public $message;
	
	public function setFlashMessage($type, $message)
    {
        $this->type = $type;
        $this->message = $message;

        $this->dispatchBrowserEvent('showFlashMessage');
    }
	
    public function render()
    {
        return view('livewire.flash-message');
    }
}
