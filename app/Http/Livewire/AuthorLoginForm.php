<?php
namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthorLoginForm extends Component
{

    public $email, $password;

    public function LoginHandler()
    {
        $this->validate([
            'email'    => 'required|email|exists:users,email',
            'password' => 'required|min:5',
        ], [
            'email.required'   => 'Enter your email address',
            'email.email'      => 'Invalid emaill address',
            'email.exists'     => 'This email is not registered in database',
            'password.requird' => 'Password is required',
        ]);

        $creds = ['email' => $this->email, 'password' => $this->password];

        if (Auth::guard('web')->attempt($creds)) {
            $checkUser = User::where('email', $this->email)->first();
            if ($checkUser->blocked == 1) {
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail', 'Your account had been blocked');

            } else {
                return redirect()->route('author.home');
            }
        } else {
            session->flash('fail', 'Incorret email or password');
        }
    }
    public function render()
    {
        return view('livewire.author-login-form');
    }
}
