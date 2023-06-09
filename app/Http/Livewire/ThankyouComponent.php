<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class ThankyouComponent extends Component
{

    public function generatePDF()
    {
        $users = User::get();
  
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
            
        $pdf = PDF::loadView('PDF', $data);
     
        return $pdf->download('itsolutionstuff.pdf');
    }


    public function render()
    {
        return view('livewire.thankyou-component')->layout('layouts.base');
    }
}
