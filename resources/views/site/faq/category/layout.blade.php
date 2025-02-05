<x-www-app>
    <x-www-layout>
        <x-www-main>

            {{-- @partials("help1") --}}

            @livewire('site-faq',[
                'mode' => "list",
                'code' => $code
            ])

        </x-www-main>
    </x-www-layout>
</x-www-app>

