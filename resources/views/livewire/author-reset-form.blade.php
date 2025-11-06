<div>
    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {!! Session::get('fail') !!}
        </div>
    @endif
    @if (Session::get('success'))
        <div class="alert alert-success">
            {!! Session::get('success') !!}
        </div>
    @endif
    <form method="post" autocomplete="off" wire:submit.prevent='ResetHandler()' novalidate>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Reset password</h2>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input wire:model='email' type="text" class="form-control" placeholder="Enter your email address" disabled
                        autocomplete="on" />
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        New Password
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" placeholder="New Password" wire:model='new_password'
                            autocomplete="off" />
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password"
                                data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg></a>
                        </span>
                        <span class="text-danger">
                            @error('new_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                <div class="mb-2">
                    <label class="form-label">
                        Confirm Password
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" placeholder="Confirm password" autocomplete="off"
                            wire:model='confirm_new_password' />
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password"
                                data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg></a>
                        </span>
                        <span class="text-danger">
                            @error('confirm_new_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="">
                        <a href="{{ route('author.login') }}">Back to login page</a>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Rest Password</button>
                </div>
            </div>
    </form>

</div>
