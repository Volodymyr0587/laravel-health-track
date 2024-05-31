<div id="loader" class="fixed inset-0 bg-white bg-opacity-75 flex justify-center items-center z-50 ">
    <div class="loader border-8 border-t-8 border-t-blue-500 border-gray-200 rounded-full w-16 h-16 animate-spin"></div>
</div>

<script>
    window.addEventListener('beforeunload', function () {
        document.getElementById('loader').classList.remove('hidden');
    });

    window.addEventListener('load', function () {
        document.getElementById('loader').classList.add('hidden');
    });
</script>
