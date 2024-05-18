<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 border-r border-white/25"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-healthtrack-light dark:bg-healthtrack-dark">
        <ul class="space-y-2 font-medium">
            {{ $slot }}
        </ul>
    </div>
</aside>
