<?php

namespace App\Http\Livewire;

use App\Mail\DemoRequestAdminMail;
use App\Mail\DemoRequestClientMail;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use \App\Models\DemoRequest as DemoModel;

class DemoRequest extends Component
{
    public string $name = '';
    public string $email = '';
    public string $company = '';
    public string $phone = '';
    public string $message = '';

    public array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:demo_requests',
        'company' => 'required|string|max:255',
        'phone' => 'required|numeric|unique:demo_requests',
        'message' => 'required|string',
    ];

    public function submit()
    {
        //save to db
        $validated = $this->validate();
        try{

            $demoRequest = DemoModel::create($validated);

            // mail client
            \Mail::to($demoRequest->email)->send(new DemoRequestClientMail());

            // mail admins
            \Mail::to('info@malakoffanalytics.co.ke')->send(new DemoRequestAdminMail($demoRequest));

           Session::flash('message',(object)['type'=>'success', 'message' => 'Your request for a demo has been received for processing. Thank you!']);
       }catch(\Throwable $e){
          Session::flash('message',(object)['type'=>'error', 'message' => 'System error: '.$e->getMessage()]);
       }

        $this->resetForm();
    }
    private function resetForm(): void
    {
        $this->name = '';
        $this->email = '';
        $this->company = '';
        $this->phone = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.demo-request');
    }
}
