<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}; ?>

{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
                viewable
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
        </div>
    @endif
</div> --}}


<div class="-login login-container">
    <div class="-login left-panel">
        <svg class="-login animated-bg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)" />
        </svg>

        <svg width="400" height="400" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
            <circle class="pulsing-element" cx="200" cy="200" r="150" fill="rgba(255,255,255,0.1)" />
            <circle class="pulsing-element" cx="200" cy="200" r="100" fill="rgba(255,255,255,0.15)" style="animation-delay: 1s;" />
            <circle class="pulsing-element" cx="200" cy="200" r="50" fill="rgba(255,255,255,0.2)" style="animation-delay: 2s;" />

            <g class="floating-element">
                <rect x="100" y="80" width="30" height="30" fill="rgba(255,255,255,0.3)" rx="5" transform="rotate(45 115 95)" />
            </g>
            
            <g class="floating-element" style="animation-delay: 2s;">
                <circle cx="300" cy="120" r="15" fill="rgba(255,255,255,0.4)" />
            </g>

            <g class="floating-element" style="animation-delay: 4s;">
                <polygon points="80,300 100,270 120,300" fill="rgba(255,255,255,0.3)" />
            </g>

            <g class="floating-element" style="animation-delay: 1s;">
                <circle cx="200" cy="200" r="60" fill="rgba(255,255,255,0.9)" />
                <path d="M170 200 L190 220 L230 180" stroke="#ffaa5a" stroke-width="6" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                <circle cx="200" cy="200" r="10" fill="#ffaa5a" />
            </g>

            <g>
                <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 200 200" to="360 200 200" dur="20s" repeatCount="indefinite"/>
                <circle cx="280" cy="200" r="8" fill="rgba(255,255,255,0.6)" />
                <circle cx="120" cy="200" r="6" fill="rgba(255,255,255,0.4)" />
            </g>

            <g>
                <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="180 200 200" to="540 200 200" dur="15s" repeatCount="indefinite"/>
                <rect x="200" y="140" width="8" height="8" fill="rgba(255,255,255,0.5)" rx="2" />
                <rect x="200" y="252" width="6" height="6" fill="rgba(255,255,255,0.3)" rx="1" />
            </g>
        </svg>
    </div>

    <div class="-login right-panel">
        <div class="-login auth-header">
            <h1>Log in to your account</h1>
            <p>Enter your email and password below to log in</p>
        </div>

        <div class="-login status-message" :status="session('status')" style="display: none;" id="sessionStatus"></div>

        <form id="loginForm" class="-login login-form">
            <div class="-login form-group">
                <label for="email" class="-login form-label">Email address</label>
                <input type="email" id="email" name="email" class="-login form-input" placeholder="email@example.com" required autofocus autocomplete="email"/>
            </div>
            <div class="-login form-group">
                <div class="-login password-container">
                    <label for="password" class="-login form-label">Password</label>
                    <a href="{{ route('password.request') }}" class="-login forgot-password">Forgot your password?</a>
                </div>
                <input type="password" id="password" name="password" class="-login form-input" placeholder="Password" required autocomplete="current-password"/>
            </div>

            <div class="-login checkbox-container">
                <input type="checkbox" id="remember" name="remember" class="-login checkbox" />
                <label for="remember" class="-login checkbox-label">Remember me</label>
            </div>

            <button type="submit" class="-login login-button">Log in</button>
        </form>

        <div class="-login signup-link">
            Don't have an account? <a href="{{ route('register') }}">Sign up</a>
        </div>
    </div>
</div>