<?php
namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthorLoginForm extends Component
{

    public $login_id, $password;

    public function LoginHandler()
    {
        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $this->prepareValidate($fieldType);
        $creds = [$fieldType => $this->login_id, 'password' => $this->password];

        if (Auth::guard('web')->attempt($creds)) {
            $checkUser = User::where($fieldType, $this->login_id)->first();
            if ($checkUser->blocked == 1) {
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail', 'Your account have been blocked');
            } else {
                return redirect()->route('author.home');
            }
        } else {
            session()->flash('fail', 'Incorret Email/Username or Password');
        }
    }

    /**
     *  Auxilia à preparar a validação dos dados recebidos
     *
     * @param  string $fieldType -> tipo de login recebido
     * @return array -> array da validação dos dados
     */
    private function prepareValidate(string $fieldType): array
    {
        return $fieldType == 'email' ?

        // Se for login por email
        $this->validate([
            'login_id' => 'required|email|exists:users,email',
            'password' => 'required|min:5',
        ], [
            'login_id'          => 'Email or Username is required',
            'login_id.email'    => 'Invalid email address',
            'login_id.exists'   => 'Email is not registered',
            'password.required' => 'Password is required',
        ])
        //Se for login por username
            : $this->validate([
            'login_id' => 'required|exists:users,username',
            'password' => 'required|min:5',
        ], [
            'login_id'          => 'Email or Username is required',
            'login_id.username' => 'Invalid username',
            'login_id.exists'   => 'Username is not registered',
            'password.required' => 'Password is required',
        ]);
    }
    public function render()
    {
        return view('livewire.author-login-form');
    }
}
