@extends('welcome.layouts.basic')
@section('title', 'Cookies policy')

@section('stylesheets')
@endsection

@section('content')

    <div class="container w-full md:max-w-3xl mx-auto pt-20">
        <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
            <!--Title-->
            <div class="">
                <h1 class="font-bold  break-normal text-main-900 pt-6 pb-2 text-3xl md:text-4xl">
                    Cookies Policy
                </h1>
                <p class="text-sm md:text-base font-normal text-gray-600">
                    Published 18 Junuary 2022
                </p>
            </div>

            <!--Page Content-->
            <div class="my-12 text-gray-600">
                <h1 class="py-2 text-3xl text-gray-800">
                    What are cookies?
                </h1>
                <p class="py-6">
                    A cookie is a file that is saved on your computer when you access some websites or web services. Cookies enable a website or web service, among other things, to store and retrieve information on the web browsing habits of users or systems and, based on the information they contain and how your system is used, may be used to recognize a user.
                </p>

                <h1 class="py-2 text-3xl text-gray-800">
                    What cookies are used by OceanSheet and what are they used for?
                </h1>
                <p class="py-6">
                    This website uses cookies for a number of purposes including:
                    <br><br>
                    <span class="text-gray-900">Analysis:</span> these cookies, dealt with by ourselves or by third parties, allow us to quantify the number of users and to statistically measure and analyze the use of our service. To this end, browsing on our webpage or web service is analyzed in order to improve the user’s experience.
                    <br><br>
                    <span class="text-gray-900">Tracking for retargeting:</span> Based on the user’s behavior in our website or web service we can offer customized content in the Google Ads Display or Facebook, to improve the experience of the users in the journey through our website and product.
                    <br><br>
                    <span class="text-gray-900">User’s settings:</span> Store the user’s settings for notifications in the product, therefore when a user comes back to the product, it can know what notifications were already displayed and dismissed, to not show the same notification again.
                </p>

                <h1 class="py-2 text-3xl text-gray-800">
                    The cookies OceanSheet direct or indirect install
                </h1>
                <p class="py-6">
                    <h1 class="py-2 text-2xl text-gray-800 underline">
                        OceanSheet
                    </h1>
                    Type: First-party
                    <br><br>
                    <ul class="list-disc text-main-400 italic text-base">
                        <li>INGRESSCOOKIE</li>
                        <li>session</li>
                    </ul>
                    <br><br>
                    OceanSheet cookies. These cookies are used to keep you logged in our product, either in the web platform and add-on for Google Sheets. This is a way to identify you in our different pages inside the product and in different places, such as Add-on for Google Sheets and the Web Platform. More information: <router-link class="underline" :to="{ name: 'privacy.policy' }"> OceanSheet Privacy Policy</router-link>
                </p>
                <p class="py-6">
                    <h1 class="py-2 text-2xl text-gray-800 underline">
                        Google Account
                    </h1>
                    Type: Third-party
                    <br><br>
                    <ul class="list-disc text-main-400 italic text-base">
                        <li>SID</li>
                        <li>HSID</li>
                        <li>SSID</li>
                        <li>And others from .google.com or accounts.google.com</li>
                    </ul>
                    <br><br>
                    Google use security cookies to authenticate users, prevent fraudulent use of login credentials, and protect user data from unauthorized parties. For example, we use cookies called 'SID’ and 'HSID’ which contain digitally signed and encrypted records of a user’s Google account ID and most recent sign-in time. The combination of these two cookies allows us to block many types of attack, such as attempts to steal the content of forms that you complete on web pages. More information: <a class="underline" href="https://policies.google.com/technologies/types">Types of cookies used by Google.</a>
                </p>
                <p class="py-6">
                    <h1 class="py-2 text-2xl text-gray-800 underline">
                        Google Analytics
                    </h1>
                    Type: Third-party
                    <br><br>
                    <ul class="list-disc text-main-400 italic text-base">
                        <li>_ga</li>
                        <li>_gat</li>
                        <li>_gid</li>
                    </ul>
                    <br><br>
                    Google Analytics cookies. These cookies are used to collect information about how visitors use our site. We use the information to compile reports and to help us improve the site. The cookies collect information in an anonymous form, including the number of visitors to the site, where visitors have come to the site from and the pages they visited. More information: <a class="underline" href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage">Google Analytics Cookie Usage</a>
                </p>
                <p class="py-6">
                    <h1 class="py-2 text-2xl text-gray-800 underline">
                        CloudFlare
                    </h1>
                    Type: Third-party
                    <br><br>
                    <ul class="list-disc text-main-400 italic text-base">
                        <li>__cfduid</li>
                    </ul>
                    <br><br>
                    CloudFlare cookie. It is used to override any security restrictions based on the IP address the visitor is coming from. It does not correspond to any user id in the web application, nor does the cookie store any personally identifiable information. More information: <a class="underline" href="https://support.cloudflare.com/hc/en-us/articles/200170156-What-does-the-Cloudflare-cfduid-cookie-do-">Cloudflare Cookies Usage</a>
                    <br>
                    <br>
                </p>

                <h1 class="py-2 text-3xl text-gray-800">
                    How can I deactivate or uninstall these cookies?
                </h1>
                <p class="py-6">
                    You may enable, block or remove cookies installed in your system through the browser configuration options on your computer. Also, If you wish to disable Google Analytics cookies in all your browsers to prevent your data being forwarded to Google Analytics, you can install the <a class="underline" href="https://tools.google.com/dlpage/gaoptout">Google Analytics Opt-out Browser Add-on</a>.
                </p>

                <h1 class="py-2 text-3xl text-gray-800">
                    Contact us
                </h1>
                <p class="py-6">
                    If you have any questions about this Cookies Policy, please contact us at privacy@oceansheet.com.
                </p>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection