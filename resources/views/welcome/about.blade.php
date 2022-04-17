

@extends('welcome.layouts.basic')
@section('title', 'About Us')

@section('stylesheets')
@endsection

@section('content')

<section class="text-gray-600">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="sm:text-4xl text-3xl mb-4 font-medium text-gray-900">OceanSheet
            </h1>
            <p class="mb-8 leading-relaxed">A startup that aims to help business to acheive more successfull work throught providing a solution that will help them to automate work with all different types of sheets (Google Sheets, Microsoft Excel & CSV/TSV)</p>
            <p class="mb-8 leading-relaxed">If you want to help the world’s spreadsheet users manage their data and automate their work, we want to meet you!</p>
            <div class="flex justify-center">
                <router-link :to="{ name: 'contact' }" class="inline-flex text-white bg-main-500 border-0 py-2 px-6 focus:outline-none hover:bg-main-600 rounded text-lg">Contact Us</router-link>
                <router-link :to="{ name: 'register' }" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Sign up</router-link>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="OceanSheet Logo" src="assets/img/oceansheet-logo.svg">
        </div>
    </div>
</section>

<section class="text-gray-600 bg-">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium mb-4 text-gray-900">Who Are OceanSheet</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Every employee is supported with opportunities to learn and develop as well as to share and implement their ideas.</p>
        </div>
        <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-main-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                        <path d="M8 17l4 4 4-4m-4-5v9"></path>
                        <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                    </svg>
                    <h2 class="font-medium text-3xl text-gray-900">2.7K</h2>
                    <p class="leading-relaxed">Requests</p>
                </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-main-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                    </svg>
                    <h2 class="font-medium text-3xl text-gray-900">74</h2>
                    <p class="leading-relaxed">Users</p>
                </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-main-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                        <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                        <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                    </svg>
                    <h2 class="font-medium text-3xl text-gray-900">1.3K</h2>
                    <p class="leading-relaxed">Connections</p>
                </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-main-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    <h2 class="font-medium text-3xl text-gray-900">46</h2>
                    <p class="leading-relaxed">Workflows</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('welcome.partials.banner')

@endsection

@section('scripts')
@endsection