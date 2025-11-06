@component('mail::message')
    # Olá, {{ $user->name }}!

    Recebemos uma solicitação para redefinir a senha da sua conta Larablog associada ao e-mail: {{ $user->email }}.

    Você pode redefinir sua senha clicando no botão abaixo:

    @component('mail::button', ['url' => $link])
        Redefinir Senha
    @endcomponent

    Se você não solicitou uma redefinição de senha, por favor, ignore este e-mail.

    Obrigado,<br>
    Equipe {{ config('app.name') }}
@endcomponent
