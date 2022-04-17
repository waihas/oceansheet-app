@extends('welcome.layouts.basic')
@section('title', 'Get in touch with Us!')

@section('stylesheets')
@endsection

@section('content')

    <section class="text-gray-600 relative">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="text-center mb-16">
                <h1 class="sm:text-3xl text-2xl font-medium text-gray-900 mb-4">Reach out to us</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">If you have an inquery or any question don't hesitate to send us a message.</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-gray-100 md:mx-auto rounded-lg p-8 flex flex-col w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-main-500 focus:ring-2 focus:ring-main-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-main-500 border-0 py-2 px-6 focus:outline-none hover:bg-main-600 rounded text-lg">Send</button>
            </div>
        </div>    
    </section>
    @include('welcome.partials.banner')

@endsection

@section('scripts')
@endsection