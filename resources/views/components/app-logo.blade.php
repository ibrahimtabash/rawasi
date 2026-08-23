@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="" {{ $attributes }}>
        <x-slot name="logo">
            <img
                src="{{ asset('assets/images/rawasi-logo.png') }}"
                alt="Rawasi"
                class="h-8 w-auto object-contain"
            >
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="" {{ $attributes }}>
        <x-slot name="logo">
            <img
                src="{{ asset('assets/images/rawasi-logo.png') }}"
                alt="Rawasi"
                class="h-8 w-auto object-contain"
            >
        </x-slot>
    </flux:brand>
@endif
