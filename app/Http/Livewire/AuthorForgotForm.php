<?php
namespace App\Http\Livewire;

use App\Mail\AuthorResetPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class AuthorForgotForm extends Component
{
    public $email;

    public function ForgotHandler()
    {
        $this->prepareValidate();

        $token = base64_encode(Str::random(64));
        DB::table('password_resets')->insert([
            'email'      => $this->email,
            'token'      => $token,
            'created_at' => Carbon::now(),
        ]);
        $user = User::where('email', $this->email)->first();
        $link = route('author.reset-form', ['token' => $token, 'email' => $this->email]);

        Mail::to($user->email)->send(new AuthorResetPasswordMail($user, $link));

        $this->email = null;
        session()->flash('success', 'We have e-mailed your password reset link');

    }
    /**
     *  Auxilia à preparar a validação dos dados recebidos
     *
     * @param  string $fieldType -> tipo de login recebido
     * @return array
     */
    private function prepareValidate(): array
    {
        // Se for login por email
        return $this->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.exists'   => 'The email is not registered',
            'email.required' => 'The email is required',
            'email.email'    => 'Invalid email address',
        ]);
    }
    public function render()
    {
        return view('livewire.author-forgot-form');
    }
}
