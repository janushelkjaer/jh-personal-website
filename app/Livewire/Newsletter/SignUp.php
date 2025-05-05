<?php

namespace App\Livewire\Newsletter;

use Livewire\Component;
use Livewire\Attributes\Session;
use Spatie\Newsletter\Facades\Newsletter;

class SignUp extends Component
{

   // #[Session(key: 'newsletter.signupSuccess')]
    public $signupSuccess = false;
    public $email;
    public $firstName;
    public $lastName;
    public $terms;
    public function render()
    {
        return view('livewire.newsletter.sign-up');
    }

    public function mount()
    {
        #dd(Newsletter::getMember('mig@selv.dk'));
    }

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email',
            'terms' => 'required',
            // 'firstName' => 'required',
            // 'lastName' => 'required',
        ]);

        try {

            $mergeFields = [];

            if ($this->firstName) {
                $mergeFields['FNAME'] = $this->firstName;
            }

            if ($this->lastName) {
                $mergeFields['LNAME'] = $this->lastName;
            }

            // language
             // dansk "6a0e584a20" => false
            // english "aa4b61b3b9" => true

            if(app()->getLocale() == 'da') {
                $interests = ['6a0e584a20'=>true, 'aa4b61b3b9'=>false];
            } else {
                $interests = ['6a0e584a20'=>false, 'aa4b61b3b9'=>true];
            }

            Newsletter::subscribeOrUpdate($this->email, $mergeFields, 'subscribers', ['interests'=> $interests]);
            $this->signupSuccess = true;
        } catch (\Exception $e) {
            Log::error('Newsletter signup failed: ' . $e->getMessage());
            dd($e->getMessage());

            $this->signupError = true;
        }
    }
}
