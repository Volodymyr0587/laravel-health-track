<div id="loader" class="fixed inset-0 bg-white bg-opacity-75 flex justify-center items-center z-50 hidden">
    <div class="loader border-8 border-t-8 border-t-blue-500 border-gray-200 rounded-full w-16 h-16 animate-spin"></div>
</div>

<script>
    // Show the loader when navigating away
    window.addEventListener('beforeunload', function () {
        document.getElementById('loader').classList.remove('hidden');
    });

    // Hide the loader once the page is fully loaded
    window.addEventListener('load', function () {
        document.getElementById('loader').classList.add('hidden');
    });

    // Handle back/forward navigation to ensure the loader is hidden
    window.addEventListener('pageshow', function (event) {
        if (event.persisted) {
            document.getElementById('loader').classList.add('hidden');
        }
    });

    // Function to handle file download clicks
    function handleDownloadClick(event) {
        document.getElementById('loader').classList.remove('hidden');

        // Hide the loader after a short delay (assuming the download has started)
        setTimeout(function () {
            document.getElementById('loader').classList.add('hidden');
        }, 500); // Adjust the delay as needed
    }

    // Attach event listeners to all download buttons/links
    document.querySelectorAll('a[href*="download-attachment"]').forEach(function (element) {
        element.addEventListener('click', handleDownloadClick);
    });
</script>
