<x-layout>

    <x-slot:heading>
        {{ __("Dashboard") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Hi") }}, {{ $user->fullName }}. {{ __("Here you can view your statistics") }}</x-hint>

            <div class="mt-6 mb-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">

                <x-statistic-item label="{{ __('Total number of Events') }}" :count="$numberOfevents">
                    <x-svg.heart class="h-6 w-6" />
                </x-statistic-item>
                <x-statistic-item label="{{ __('Total price of Events') }}" :count="$totalEventsPrice">
                    <x-svg.price class="h-6 w-6" />
                </x-statistic-item>
                <x-statistic-item label="{{ __('Total number of Treatments') }}" :count="$numberOfTreatments">
                    <x-svg.treatment-stat class="h-6 w-6" />
                </x-statistic-item>
                <x-statistic-item label="{{ __('Total price of Treatments') }}" :count="$totalTreatmentsPrice">
                    <x-svg.price class="h-6 w-6" />
                </x-statistic-item>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <canvas id="eventPricesOverTime"></canvas>
            </div>
            <div>
                <canvas id="eventsPriceChart"></canvas>
            </div>
            <div>
                <canvas id="treatmentsChart"></canvas>
            </div>
            <div>
                <canvas id="treatmentsPriceChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

    </script>

</x-layout>
