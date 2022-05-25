<?php

namespace App\Http\Livewire;

use App\Mail\SubscriberJoined;
use App\Models\MailList;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Subscribe extends Component
{
    public string $email = '';

     protected array $rules = [
        'email' => 'required|email|unique:mail_lists',
    ];

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function subscribe(): void
    {
       $validatedData = $this->validate();

       try{

            MailList::create($validatedData);

            \Mail::to($validatedData['email'])->send(new SubscriberJoined());

           Session::flash('message',(object)['type'=>'success', 'message' => 'Your email has been added to our subscribers list. Thank you!']);
       }catch(\Throwable $e){
          Session::flash('message',(object)['type'=>'error', 'message' => 'System error: '.$e->getMessage()]);
       }


//        try {
//
//         $subscriber = MailList::create([
//             'email' => $this->email
//         ]);

//          Session::flash('success','Your email has been received. We will keep you posted');
//          return back();
//        }catch(\Throwable $e){
//            Session::flash('error','Sorry, an error occured while trying to store your email.'.$e->getMessage());
//            return back();
//        }
    }
    public function render()
    {
        return view('livewire.subscribe');
    }
}
