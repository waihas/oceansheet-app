@extends('welcome.layouts.basic')
@section('title', 'Security')

@section('stylesheets')
@endsection

@section('content')

<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
            <h1 class="sm:text-5xl text-3xl font-medium text-gray-900 mb-4">
                OceanSheet data security
            </h1>
            <p class="text-base leading-relaxed lg:w-3/4 mx-auto text-gray-500s">
                Spreadsheets are often used to store sensitive and confidential data. As spreadsheet experts, we understand that spreadsheet security is a top priority. In addition to developing new technologies to manage data, we also develop methods and technologies to guarantee security for you and your documents.
            </p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
            </div>
        </div>
        <div class="mx-auto flex px-5 items-center justify-center flex-col">
            <img class="md:w-1/2 w-5/6 mb-10 object-cover object-center rounded" alt="Oceansheet Security" src="/assets/img/security.jpg">
            <div class="text-center lg:w-3/4 w-full">
                <h1 class="sm:text-5xl text-3xl mb-4 font-medium text-gray-900">
                    File to file connections
                </h1>
                <p class="mb-8 leading-relaxed">
                    OceanSheet data transfers are made from one file to another, via a secure connection. The content of a spreadsheet is never copied to another database. This ensures that your data is as safe as the environment that it’s hosted in.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="text-gray-600 bg-main-100">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
            <h1 class="sm:text-5xl text-3xl font-medium text-gray-900 mb-4">
                Security culture
            </h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">
                At OceanSheet, we take your privacy and data security very seriously and it’s part of our company culture.
            </p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-main-500 inline-flex"></div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-xl sm:text-3xl font-medium mb-3">
                        Company priority
                    </h2>
                    <p class="leading-relaxed text-base">
                        OceanSheet has made security and privacy a company priority. We ensure that our entire team is focused and motivated to provide the most secure solution for our users.
                    </p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-xl sm:text-3xl font-medium mb-3">
                        Background check
                    </h2>
                    <p class="leading-relaxed text-base">
                        We check all new hires’ external references prior to joining OceanSheet, and where the law permits, we may also conduct criminal and security background checks.
                    </p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-xl sm:text-3xl font-medium mb-3">
                        Security training
                    </h2>
                    <p class="leading-relaxed text-base">
                        All team members are security trained as part of our onboarding process. Every employee is legally bound by the terms of their contract to be fully committed to user security.
                    </p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-main-100 text-main-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-xl sm:text-3xl font-medium mb-3">
                        Weekly meetings
                    </h2>
                    <p class="leading-relaxed text-base">
                        OceanSheet holds weekly, cross-departmental meetings to revise and discuss security and data privacy. We ensure that the entire company is updated on all security-related issues.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-gray-600">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="OceanSheet Security of information" src="/assets/img/security-of-information.jpg">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                Infrastructure and transmission of information
            </h1>
            <p class="mb-8 leading-relaxed">
                OceanSheet servers are located in the US, in SOC 1, SOC 2, and ISO 27001 certified data centers. Transmission of all information between your device and our servers is protected using 256-bit TLS encryption.
            </p>
        </div>
    </div>
</section>
<section class="text-gray-600 bg-main-100">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                GDPR compliance
            </h1>
            <p class="mb-8 leading-relaxed">
                GDPR outlines requirements for organizations that are headquartered in, or have users in, Europe. It aims to strengthen the protection of personal data. OceanSheet is fully compliant with the General Data Protection Regulation (“GDPR”). 
                <router-link class="underline hover:text-main-600" :to="{name: 'privacy.guide'}">Read our GDPR guide.</router-link>
            </p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="OceanSheet Security GDPR" src="/assets/img/security-gdpr.png">
        </div>
    </div>
</section>
<section class="text-gray-600">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="OceanSheet Security Permissions" src="/assets/img/security-permissions.jpg">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                Required permissions
            </h1>
            <p class="mb-8 leading-relaxed">
                Some permissions to your account are required for OceanSheet to function. The permissions granted are used exclusively for the operation of the product limited to the services offered. <span class="font-bold"> OceanSheet does not store any copies of the content of your files.</span>
                <router-link class="underline hover:text-main-600" :to="{name: 'privacy.policy'}">  Read our Privacy Policy.</router-link>
            </p>
        </div>
    </div>
</section>
    @include('welcome.partials.banner')

@endsection

@section('scripts')
@endsection