<x-layout>

    <x-slot:heading>
        <div class="flex space-x-4">
            <x-svg.heart class="pr-2 pt-2" />
            <div>
                {{ __("Health Track") }}
                <p class="text-base text-healthtrack-dark dark:text-healthtrack-light">{{ __("Your health is in good hands") }}.</p>
            </div>
        </div>
    </x-slot:heading>

    <div class="sm:ml-64">
        <!-- HERO -->
        <section class="bg-white text-gray-900 dark:bg-healthtrack-dark dark:text-white">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-12">
                <a href="#"
                    class="inline-flex items-center justify-between px-1 py-1 pr-4 text-sm text-gray-700 bg-gray-100 rounded-full mb-7 dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                    role="alert">
                    <span class="text-xs bg-healthtrack-light rounded-full text-white px-4 py-1.5 mr-3">{{ __("News")
                        }}</span> <span class="text-sm font-medium">{{ __("Visit our blog page!") }}</span>
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    {{ __("Welcome to Health Track - Your personal health assistant") }}</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">{{
                    __("Track your doctor visits, treatments, prescriptions, and more in one place") }}</p>

                @guest
                <div
                    class="flex flex-col mb-8 space-y-4 lg:mb-16 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-healthtrack-light hover:bg-healthtrack-light-hover dark:bg-healthtrack-button-dark dark:hover:healthtrack-button-dark-hover">
                        Get started
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                @endguest

                <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
                    <span class="font-semibold text-gray-400 uppercase">FEATURED IN</span>
                    <div class="flex flex-wrap items-center justify-center mt-8 text-gray-500 sm:justify-between">
                        <a href="#" class="mb-5 mr-8 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                            <x-svg.youtube />
                        </a>
                        <a href="#" class="mb-5 mr-4 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                            <x-svg.x />
                        </a>
                        <a href="#" class="mb-5 mr-2 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                            <x-svg.facebook />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->

        <!-- CONTENT -->
        <section class="bg-white text-gray-900 dark:bg-healthtrack-dark dark:text-white">
            <div class="items-center max-w-screen-xl gap-16 px-4 py-8 mx-auto lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{ __("Everything for your health in one app") }}</h2>
                    <p class="mb-4">
                        <ul>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Visit tracking. ") }}</span>{{ __("Easily record and review all your visits to the doctor.") }}</li>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Scheduling exams. ") }}</span>{{ __("Create reminders for scheduled medical checkups.") }}</li>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Treatment and prescriptions. ") }}</span>{{ __("Keep all the necessary documents, prescriptions, and treatment instructions.") }}</li>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Medications. ") }}</span>{{ __("Create a medication schedule and get notifications.") }}</li>
                            <li class="font-bold italic">{{ __("And much more") }}...</li>
                        </ul>
                    </p>
                    <p class="mt-4 font-bold">{{ __("Your health is in good hands.") }}</p>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img class="w-full rounded-lg"
                        src="{{ asset('storage/images/health-3.jpg') }}"
                        alt="office content 1">
                    <img class="w-full mt-4 rounded-lg lg:mt-10"
                        src="{{ asset('storage/images/health-6.jpg') }}"
                        alt="office content 2">
                </div>
            </div>
        </section>
        <!-- END CONTENT -->

        <!-- FEATURE -->
        <section class="bg-white text-gray-900 dark:bg-healthtrack-dark dark:text-white">
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{ __("Why choose us") }}</h2>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                        {{ __("Our web app offers numerous benefits that make managing your health easy and efficient:") }}
                    </p>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                    <div>
                        <div
                            class="flex items-center justify-center w-10 h-10 mb-4 bg-healthtrack-light rounded-full lg:h-12 lg:w-12 dark:bg-healthtrack-light-hover">
                            <x-svg.feature.intuitive-interface />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ __("Intuitive interface") }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">{{__("Our web-based application has a simple and easy-to-use interface that requires no special skills. Even new users will quickly get up to speed and be able to manage their medical records efficiently")}}.</p>
                    </div>
                    <div>
                        <div
                            class="flex items-center justify-center w-10 h-10 mb-4 bg-healthtrack-light rounded-full lg:h-12 lg:w-12 dark:bg-healthtrack-light-hover">
                            <x-svg.feature.data-security />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ __("Data security") }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">{{ __("Your medical records are securely protected with state-of-the-art encryption technology. We ensure that your personal information remains confidential and is accessible only to you.") }}</p>
                    </div>
                    <div>
                        <div
                            class="flex items-center justify-center w-10 h-10 mb-4 bg-healthtrack-light rounded-full lg:h-12 lg:w-12 dark:bg-healthtrack-light-hover">
                            <x-svg.feature.mobility />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ __("Mobility") }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">{{ __("Our app is available on all devices - computers, tablets and smartphones. This allows you to access important medical information anytime and anywhere.") }}</p>
                    </div>
                    <div>
                        <div
                            class="flex items-center justify-center w-10 h-10 mb-4 bg-healthtrack-light rounded-full lg:h-12 lg:w-12 dark:bg-healthtrack-light-hover">
                            <x-svg.feature.personalization />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ __("Personalization") }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">{{ __("You can customize our app to suit your needs by adding reminders, personalized notes, and adjusting settings. This allows you to create a convenient and individualized approach to managing your health.") }}</p>
                    </div>
                    <div>
                        <div
                            class="flex items-center justify-center w-10 h-10 mb-4 bg-healthtrack-light rounded-full lg:h-12 lg:w-12 dark:bg-healthtrack-light-hover">
                            <x-svg.feature.user-support />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ __("User support") }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">{{ __("Our support team is always ready to help you with any questions or concerns. We provide round-the-clock support through various communication channels so you can always count on us.") }}</p>
                    </div>
                    <div>
                        <div
                            class="flex items-center justify-center w-10 h-10 mb-4 bg-healthtrack-light rounded-full lg:h-12 lg:w-12 dark:bg-healthtrack-light-hover">
                            <x-svg.feature.update />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ __("Regular updates") }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">{{ __("We are constantly working to improve our web app by introducing new features and improvements. With regular updates, you always get the best tool for managing your health.") }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END FEATURE -->

        <!-- CTA -->
        <section class="bg-white text-gray-900 dark:bg-healthtrack-dark dark:text-white">
            <div
                class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-1 lg:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full dark:hidden"
                    src="{{ asset('storage/images/health-events-dark.png') }}"
                    alt="health image">
                <img class="hidden w-full dark:block"
                    src="{{ asset('storage/images/health-events-light.png') }}"
                    alt="health image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{ __("A few simple steps to a healthy life") }}</h2>
                        <ul>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Registration: ") }}</span>{{ __("Create your personal account.") }}</li>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Adding information: ") }}</span>{{ __("Enter details about your visits, treatments and medications.") }}</li>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Organize: ") }}</span>{{ __("Use our planning and reminder tools.") }}</li>
                            <li class="mb-4"><span class="font-bold text-healthtrack-light dark:text-healthtrack-light-hover">{{ __("Use: ") }}</span>{{ __("Enjoy confidence in your health.") }}</li>
                        </ul>
                    @guest
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-healthtrack-light hover:bg-healthtrack-light-hover dark:bg-healthtrack-button-dark dark:hover:healthtrack-button-dark-hover">
                        Get started
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    @endguest
                </div>
            </div>
        </section>
        <!-- END CTA -->

        <!-- FOOTER -->
        <footer class="p-4 bg-white text-gray-900 dark:bg-healthtrack-dark dark:text-white">
            <div class="max-w-screen-xl mx-auto">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="/" class="flex items-center space-x-2">
                            <x-svg.heart class="h-4 w-4" />
                            <span
                                class="self-center pr-4 text-sm font-semibold whitespace-nowrap dark:text-white">Health Track</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">YouTube</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline ">X</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Facebook</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a
                            href="/" class="hover:underline">HealthTrack™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <x-svg.youtube-footer />
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <x-svg.x-footer />
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <x-svg.facebook-footer />
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
    </div>

</x-layout>
