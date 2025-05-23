<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <flux:input
            wire:model="name"
            :label="__('Name')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Full name')"
        />

        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
            viewable
        />

        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
            viewable
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
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
            <h1>Create an account</h1>
            <p>Fill in the details below to Register</p>
        </div>

        <div class="-login status-message" :status="session('status')" style="display: none;" id="sessionStatus"></div>

        <form method="post" action="{{ route('register') }}" class="-login login-form">
            @csrf
            <div class="-login form-group">
                <label for="name" class="-login form-label">Name</label>
                <input type="text" id="name" name="name" class="-login form-input" placeholder="Joe Moses" required autofocus autocomplete="name"/>
            </div>
            <div class="-login form-group">
                <label for="email" class="-login form-label">Email address</label>
                <input type="email" id="email" name="email" class="-login form-input" placeholder="email@example.com" required autofocus autocomplete="email"/>
            </div>
            <div class="-login form-group">
                <div class="-login password-container">
                    <label for="password" class="-login form-label">Password</label>
                    <a href="{{ route('password.request') }}" class="-login forgot-password">Forgot your password?</a>
                </div>
                <input type="password" id="password" name="password" class="-login form-input" placeholder="Password" required autocomplete="new-password"/>
            </div>

            <div class="-login form-group">
                <label for="password_confirmation" class="-login form-label">Confirm password</label>
                <input type="password" id="password" name="confirm_password" class="-login form-input" placeholder="Confirm password" required autocomplete="new-password"/>
            </div>

            <div class="-login checkbox-container">
                <input type="checkbox" id="remember" name="remember" class="-login checkbox" />
                <label for="remember" class="-login checkbox-label">Remember me</label>
            </div>

            <button type="submit" class="-login login-button">Create account</button>
        </form>

        <div class="-login signup-link">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</div>