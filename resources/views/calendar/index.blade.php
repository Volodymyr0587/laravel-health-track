<x-layout>

    <x-slot:heading>
        {{ __("Calendar") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can view the calendar of events.") }}</x-hint>


            <div id="calendar" class="dark:text-white"></div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var locale = '{{ session()->get('locale') }}';
                var calendar = new FullCalendar.Calendar(calendarEl, {
                  initialView: 'dayGridMonth',
                  events: @json($eventsCalendar),
                  themeSystem: 'standard',
                  locale: locale,
                });
                calendar.render();
              });
            </script>
        </div>
    </div>

</x-layout>
