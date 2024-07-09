<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="text-white">
    <h1 class="font-bold text-7xl">Happening now</h1>
    <h4 class="font-bold text-3xl mt-12 mb-6">Join today.</h4>

    <div class="w-[60%] mt-4">
        <div class="space-y-2">
            <div
                class="px-5 items-center flex justify-center py-2 hover:cursor-pointer bg-white text-center rounded-full text-black">
                <iconify-icon icon="devicon:google" class="me-1"></iconify-icon>
                Sign up with Google
            </div>
            <div
                class="px-5 mt-1 items-center font-bold flex justify-center py-2 hover:cursor-pointer text-center bg-white rounded-full text-black">
                <iconify-icon icon="ic:baseline-apple" class="" width="24px"></iconify-icon>
                Sign up with Apple
            </div>

            <div class="flex items-center">
                <hr class="w-full">
                </hr>
                <p class="bg-black px-2">or</p>
                <hr class="w-full">
                </hr>
            </div>

            <div class="bg-blue-600 cursor-pointer font-bold text-white rounded-full py-2 text-center">
                Create account
            </div>

            <div class="text-[12px] text-slate-500">
                By signing up, you agree to the <a href="" class="text-blue-500 hover:underline">Terms of
                    Service</a>
                and <a href="" class="text-blue-500 hover:underline">Privacy
                    Police</a>, including <a href="" class="text-blue-500 hover:underline">Cooking Use.</a>
            </div>
        </div>

        <div class="space-y-3 mt-12">
            <h1 class="text-lg font-bold">Already have an account?</h1>

            <div type="button"
                class="border border-slate-500 cursor-pointer rounded-full text-blue-500 font-bold text-center py-2"
                data-hs-overlay="#hs-vertically-centered-modal">
                Sign in
            </div>
        </div>



    </div>

    <div id="hs-vertically-centered-modal"
        class="hs-overlay hidden size-full bg-blue-500 bg-opacity-5 fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-black dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex relative items-center py-3 px-4">
                    <button type="button"
                        class="flex absolute justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                        data-hs-overlay="#hs-vertically-centered-modal">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                    <h3 class="mx-auto font-bold text-gray-800 dark:text-white">
                        <iconify-icon icon="ri:twitter-x-fill" width="40px" class="text-white"></iconify-icon>
                    </h3>
                </div>
                <div class="p-4 overflow-y-auto w-[70%] mx-auto flex flex-col justify-center text-center">
                    <div class="space-y-5">
                        <h1 class="text-2xl font-bold text-start">Sign in to X</h1>

                        <div
                            class="px-5 items-center flex justify-center py-2 hover:cursor-pointer bg-white text-center rounded-full text-black">
                            <iconify-icon icon="devicon:google" class="me-1"></iconify-icon>
                            Sign up with Google
                        </div>

                        <div
                            class="px-5 mt-1 items-center font-bold flex justify-center py-2 hover:cursor-pointer text-center bg-white rounded-full text-black">
                            <iconify-icon icon="ic:baseline-apple" class="" width="24px"></iconify-icon>
                            Sign up with Apple
                        </div>

                        <div class="flex items-center">
                            <hr class="w-full">
                            </hr>
                            <p class="bg-black px-2">or</p>
                            <hr class="w-full">
                            </hr>
                        </div>
                    </div>

                    <form wire:submit='login' class="space-y-5">
                        <input type="text" placeholder="Phone, email, or username" wire:model='form.email'
                            type="email" name="email"
                            class="px-5 py-3 rounded-md border border-slate-700 w-full bg-black">
                        <input type="password" placeholder="Password" wire:model='form.password' name="password"
                            class="px-5 py-3 rounded-md border border-slate-700 w-full bg-black">

                        <button class="bg-white rounded-full w-full py-2 text-black font-bold">Next</button>
                    </form>


                    <div class="pb-24">
                        <div class="w-full py-2 border border-slate-700 rounded-full my-5">
                            <a href="{{ route('register') }}" class="w-full font-bold py-2">Forgot
                                password?</a>
                        </div>

                        <p>Don't have an account? <a href="{{ route('register') }}"
                                class="text-blue-600 hover:underline">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

{{-- <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" type="password"
                name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
