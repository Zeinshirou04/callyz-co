@extends('layouts.main')

@section('container')
    <section id="greetings-page" class="bg-gradient-to-br from-black via-slate-800 to-gray-600 pb-4">
        <div class="w-max h-24">

        </div>
        <div class="mx-4 p-4 text-justify">
            <p class="text-white font-bold text-4xl">
                Make <br>Your clothing more
            </p>
            <p class="text-white font-extrabold text-7xl my-4 bg-clip-text bg-gradient-to-r from-slate-400 via-gray-500 to-white text-transparent">
                Aesthetic
            </p>
            <p class="text-white font-bold text-4xl">
                With our Design
            </p>
            <p class="text-white text-lg mt-2">
                Confused to design your own clothing to be look more Aesthetic and Vintage? You have us. Callyz Designer will be happy to help you on designing your clothing with any concept and idea, with only providing us the theme, color, and objects. We will make you a very well done design that young people will love.
            </p>
        </div>
    </section>
    <section id="examples-page" class="bg-gradient-to-bl from-gray-600 via-slate-800 to-black pt-16 px-4 pb-4">
        <div>
            <h3 class="text-white font-bold text-6xl text-center">
                Design Examples
            </h3>
            <div class="mx-auto grid grid-rows-2 grid-cols-1 gap-4 mt-6 border-2 border-white rounded py-6 w-72">
                @foreach ($clothing["data"] as $example)
                    <div class="mx-auto text-center">
                        <img class="w-64" src="/images/clothing/{{ $example['img_name'] }}" alt="{{ $example['design_name'] }}">
                        <p class="font-bold text-lg text-white">
                            {{ $example['design_name'] }}
                        </p>
                        <p class="text-white text-md">
                            Designed by {{ $example['designer_name'] }}
                        </p>
                    </div>
                @endforeach
                <a class="mx-auto" href="/gallery">
                    <button class="transition duration-1000 ease-in-out border border-white rounded-full text-white px-2 py-1 bg-gradient-to-r from-blue-700 to-purple-800 hover:from-purple-800 hover:to-blue-700" type="submit">View More</button>
                </a>
            </div>
        </div>
    </section>
    <section id="vision-page" class="bg-gradient-to-br from-black via-slate-800 to-gray-600 pt-16 px-4 pb-4">
        <div class="grid grid-cols-1 grid-rows-2 mx-4">
            <div>
                <h1 class="text-white font-bold text-6xl">Vision</h1>
                <div class="mt-4 border-2 border-white rounded p-4">
                    <p class="text-white text-justify indent-8 text-xl">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. In voluptates accusantium voluptas doloremque veritatis aut perspiciatis sapiente, ipsa voluptatem sed ut repellendus nemo nihil magnam vero eaque at doloribus voluptatum totam aperiam cupiditate minus facere consectetur alias! Quam saepe in commodi eaque quos atque ea ducimus sit recusandae! Recusandae numquam voluptatibus ratione dicta culpa reiciendis totam ipsa sapiente sint distinctio in vitae aut odio, aliquam sequi! Pariatur iusto, perspiciatis temporibus explicabo minima excepturi itaque, quidem neque tenetur, quod rem repellat ipsum maiores eos numquam quisquam fugit commodi odit eveniet dicta ipsa id suscipit? Veniam sit laudantium commodi quis iusto nisi?
                    </p>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="text-white font-bold text-6xl text-right">Mission</h1>
                <div class="mt-4 border-2 border-white rounded p-4">
                    <p class="text-white text-justify indent-8 text-xl">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. In voluptates accusantium voluptas doloremque veritatis aut perspiciatis sapiente, ipsa voluptatem sed ut repellendus nemo nihil magnam vero eaque at doloribus voluptatum totam aperiam cupiditate minus facere consectetur alias! Quam saepe in commodi eaque quos atque ea ducimus sit recusandae! Recusandae numquam voluptatibus ratione dicta culpa reiciendis totam ipsa sapiente sint distinctio in vitae aut odio, aliquam sequi! Pariatur iusto, perspiciatis temporibus explicabo minima excepturi itaque, quidem neque tenetur, quod rem repellat ipsum maiores eos numquam quisquam fugit commodi odit eveniet dicta ipsa id suscipit? Veniam sit laudantium commodi quis iusto nisi?
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-12">
            <h4 class="text-red-600 text-4xl font-bold text-center stroke-1 stroke-white">Disclaimer</h4>
            <p class="text-red-600 mt-2 text-lg font-semibold text-center">
                This Website is still on development, some features maybe could not working properly as we still developing the databases and else. We hope this preview could give users some view for what it'll be in the future. We will happy to listen your support and we thanks a lot for it.
            </p>
        </div>
    </section>
    <section id="contact-page" class="bg-gradient-to-bl from-gray-600 via-slate-800 to-black pt-16 px-4 pb-12">
        <h1 class="text-white text-6xl font-bold text-center">
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