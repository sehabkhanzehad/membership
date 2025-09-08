<footer class="border-t border-gray-100 bg-white">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 text-sm text-gray-500">
        <p>© <span id="footYear"></span> YourApp</p>
        <div class="flex items-center gap-4">
            <a href="#" class="hover:text-gray-700">Privacy</a>
            <a href="#" class="hover:text-gray-700">Terms</a>
            <a href="#" class="hover:text-gray-700">Status</a>
        </div>
    </div>
</footer>
@push('scripts')
<script>
    document.getElementById('footYear').textContent = new Date().getFullYear();
</script>
@endpush
