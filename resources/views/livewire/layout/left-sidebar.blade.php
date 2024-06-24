<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800 dark:text-gray-200" x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                    x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav> --}}

<div id="left-sidebar" class="w-[21%] fixed min-h-screen px-12 border-r border-gray-800 flex flex-col justify-between">
    <div>
        <ul class="pt-4 space-y-5 text-[21px]">
            <li>
                <a href=""><iconify-icon icon="ri:twitter-x-fill" width="30px"></iconify-icon></a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="material-symbols-light:home" width="30px"></iconify-icon>
                <a href="">Home</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="ri:search-line" width="30px" height="27px"></iconify-icon>
                <a href="">Explore</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="mingcute:notification-line" width="30px"></iconify-icon>
                <a href="">Notifications</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="lets-icons:message" width="30px"></iconify-icon>
                <a href="">Messages</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="hugeicons:grok" width="30px"></iconify-icon>
                <a href="">Grok</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="majesticons:list-box-line" width="30px"></iconify-icon>
                <a href="">Lists</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="material-symbols:bookmark-outline" width="30px"></iconify-icon>
                <a href="">Bookmarks</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="f7:person-2" width="30px"></iconify-icon>
                <a href="">Communities</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="ri:twitter-x-fill" width="30px" height="24px"></iconify-icon>
                <a href="">Premium</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="bi:person" width="30px"></iconify-icon>
                <a href="">Profile</a>
            </li>
            <li class="flex flex-row items-center space-x-4">
                <iconify-icon icon="pepicons-pop:dots-x-circle" width="30px"></iconify-icon>
                <a href="">More</a>
            </li>
        </ul>

        <div class="mt-7">
            <a href="" class="px-24 py-3 bg-blue-500 rounded-full">Post</a>
        </div>
    </div>

    <div class="flex py-3 space-x-2 transition duration-75 hover:delay-100 hover:bg-gray-900">
        <div>
            <div class="w-12 h-12 bg-gray-400 rounded-full"></div>
        </div>
        <div class="flex flex-col">
            <a href="" class="font-bold">{{ Auth::user()->name }}</a>
            <a href="" class="text-gray-500">{{ Auth::user()->email }}</a>
        </div>
    </div>
</div>
