<x-www-app>
    <x-www-layout>
        <x-www-main>

            {{-- @partials("help1") --}}

            @livewire('site-help',[
                'mode' => "article",
                'code' => $code,
                '_id' => $id
            ])

        </x-www-main>
    </x-www-layout>
</x-www-app>

