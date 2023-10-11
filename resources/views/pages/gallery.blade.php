@extends('layouts.main')

@section('container')
    <section id="greetings-page" class="bg-gradient-to-br from-black via-slate-800 to-gray-600 pb-4">
        <div class="w-max h-24">

        </div>
        <div class="mt-4">
            <h1 class="text-white font-bold text-4xl text-center">
                Design Gallery
            </h1>
            <p class="mt-2 text-white text-lg text-center">
                Have fun exploring our design gallery
            </p>
        </div>
        <div class="border-2 border-white rounded p-2 mt-4 mb-12 mx-8">
            <div class="grid grid-cols-2">
                @foreach ($clothing as $item)
                    <div class="mt-4 text-center">
                        <img class="w-32 mx-auto" src="/images/clothing/{{ $item['img_name'] }}" alt="{{ $item['design_name'] }}">
                        <p class="font-bold text-md text-white">
                            {{ $item['design_name'] }}
                        </p>
                        <p class="text-white text-sm">
                            Designed by {{ $item['designer_name'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection