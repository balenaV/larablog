<?php
namespace App\Http\Livewire;

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

        $data = [
            'name'         => $user->name,
            'body_message' => $this->prepareBodyMessage($link),
        ];

        Mail::send('forgot-email-template', $data, function ($message) use ($user) {
            $message->from('noreply@example.com', 'Larablog');
            $message->to($user->email, $user->name)->subject('Reset Password');
        });

        $this->email = null;
        session()->flash('success', 'We have e-mailed your password reset link');

    }

    /**
     *  Prepara o corpo da mensagem de recuperação de senha do usuário
     *
     * @param mixed $link -> link para a recuperação da senha
     * @return string -> corpo da mensagem de recuperação de senha
     */
    private function prepareBodyMessage($link): string
    {
        return "We are received a request to reset the password for <b>Larablog</b> account associated with " . $this->email . " <br>You can reset your password by clicking the button below <br> <a href='" . $link . "' target='_blank' style=" . $this->prepareBodyStyle() . ">Reset Password</a> <br> If you did not request for a password reset, please ignore this email";
    }
    /**
     *  Prepara o estilo da mensagem de recuperação de senha do usuário
     *
     * @return array -> array da validação dos dados
     */
    private function prepareBodyStyle(): string
    {
        return "'#color:#FFF;border-color:#22bc66;border-style:solid;border-width:10px 10px; background-color:#22bc66;display:inline-block;text-decoration:none;border-radius:0.2rem;box-shadow:0 2px 3px rgba(0,0,0,0.16);-webkit-text-size-adjust:none;box-sizing:border-box'";
    }

    /**
     *  Auxilia à preparar a validação dos dados recebidos
     *
     * @param  string $fieldType -> tipo de login recebido
     * @return array -> array da validação dos dados
     */
    private function prepareValidate(): array
    {
        // Se for login por email
        $this->validate([
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
