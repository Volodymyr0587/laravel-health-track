<x-layout>

    <x-slot:heading>
        {{ __("Dashboard") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Hi") }}, {{ $user->fullName }}. {{ __("Here you can view your statistics") }}</x-hint>

            <div class="mt-6 mb-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">

                <x-statistic-item label="{{ __('Total number of Events') }}" :count="$numberOfEvents">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="w-full">
                <canvas id="totalNumbersAndPrices"></canvas>
            </div>
            <div class="w-full h-80">
                <canvas id="priceDistribution"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Стовпчастий графік загальної кількості та цін подій та лікування --}}
    <script>
        const totalNumbersAndPricesCtx = document.getElementById('totalNumbersAndPrices').getContext('2d');

        new Chart(totalNumbersAndPricesCtx, {
            type: 'bar',
            data: {
                labels: ['{{ __("Events") }}', '{{ __("Treatments") }}'],
                datasets: [
                    {
                        label: '{{ __("Total Number") }}',
                        data: [{{ $numberOfEvents }}, {{ $numberOfTreatments }}],
                        backgroundColor: 'rgb(75, 192, 192)',
                        yAxisID: 'y'
                    },
                    {
                        label: '{{ __("Total Price") }}',
                        data: [{{ $totalEventsPrice }}, {{ $totalTreatmentsPrice }}],
                        backgroundColor: 'rgb(255, 99, 132)',
                        yAxisID: 'y1'
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        position: 'left',
                        title: {
                            display: true,
                            text: '{{ __("Number") }}'
                        }
                    },
                    y1: {
                        beginAtZero: true,
                        position: 'right',
                        title: {
                            display: true,
                            text: '{{ __("Price") }}'
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    }
                }
            }
        });
    </script>

    {{-- Кругова діаграма розподілу витрат на події та лікування --}}
    <script>
        const priceDistributionCtx = document.getElementById('priceDistribution').getContext('2d');

        new Chart(priceDistributionCtx, {
            type: 'pie',
            data: {
                labels: ['{{ __("Total Events Price") }}', '{{ __("Total Treatments Price") }}'],
                datasets: [{
                    data: [{{ $totalEventsPrice }}, {{ $totalTreatmentsPrice }}],
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    </script>



</x-layout>
