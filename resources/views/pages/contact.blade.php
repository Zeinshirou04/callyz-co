@extends('layouts.main')

@section('container')
    <section id="contact-page" class="bg-gradient-to-bl from-gray-600 via-slate-800 to-black pt-16 px-4 pb-12">
        <h1 class="mt-12 text-white text-6xl font-bold text-center">
            Contact Us
        </h1>
        <form action="{{ url('/') }}" method="post" class="text-white text-center mt-12">
            @csrf
            <label for="name" class="text-xl font-bold">
                NAME
            </label><br>
            <input type="text" name="name" class="mt-2 rounded-2xl py-2 px-4 text-black text-xl mb-8" value="" placeholder="Write your name here..." required><br>
            <label for="subject" class="text-xl font-bold">
                SUBJECT
            </label><br>
            <input type="text" name="subject" class="mt-2 rounded-2xl py-2 px-4 text-black text-xl mb-8" value="" placeholder="Write the subject here..." required><br>
            <label for="message" class="text-xl font-bold">
                MESSAGE
            </label><br>
            <textarea name="message" id="message" cols="24" rows="10" class="rounded-2xl mt-2 py-2 px-4 text-black text-xl mb-8" value="" placeholder="Write your message here..." required></textarea><br>
            <input class="transition duration-1000 ease-in-out border border-white rounded-full text-white px-2 py-1 bg-gradient-to-r from-blue-700 to-purple-800 hover:from-purple-800 hover:to-blue-700 px-8 font-semibold" type="submit" name="submit" value="Submit">
        </form>
    </section>
@endsection