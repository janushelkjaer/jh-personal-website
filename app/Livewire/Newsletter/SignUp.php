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

            Newsletter::subscribeOrUpdate($this->email, $mergeFields);
            $this->signupSuccess = true;
        } catch (\Exception $e) {
            Log::error('Newsletter signup failed: ' . $e->getMessage());
            dd($e->getMessage());

            $this->signupError = true;
        }
    }
}
