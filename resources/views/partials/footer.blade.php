<div class="flex flex-col sticky bottom-0 {{ $footer_class }} border-t-2 w-full pb-8">
    <div class="grid grid-cols-2 h-1/2">
        <div class="my-4 mx-4 p-2 text-left text-white underline">
            <a href="{{ url('/') }}">Home</a><br>
            <a href="{{ url('/gallery') }}">Gallery</a><br>
            <a href="{{ url('/#contact-page') }}">Contact us</a>
        </div>
        <div class="my-4 mx-4 p-2 flex flex-row justify-end">
            <div class="flex flex-col">
                <div class="mb-2 flex flex-row">
                    <a href="https://www.instagram.com/liushensimp/">
                        <p class="text-white">@Liushensimp</p>
                    </a>
                    <a href="https://www.instagram.com/liushensimp/" target="_blank"><i class="fa-brands fa-instagram fa-2xl cursor-pointer mt-3 mx-2 text-white hover:text-white/20 transition-all"></i></a>
                </div>
                <div class="my-2 flex flex-row justify-end">
                    <a href="https://github.com/Zeinshirou04">
                        <p class="text-white">Zeinshirou04</p>
                    </a>
                    <a href="https://github.com/Zeinshirou04" target="_blank"><i class="fa-brands fa-square-github fa-2xl cursor-pointer mt-3 mx-2 text-white hover:text-white/20 transition-all"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="h-12 flex flex-col justify-end">
        <p class="text-center text-white">Callyz Web | Copyright 2023</p>
    </div>
</div>