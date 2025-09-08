@push('scripts')
<script>
// Sidebar controls
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('sidebarOverlay');
const openBtn = document.getElementById('openSidebarBtn');
function openSidebar() {
    sidebar.classList.remove('-translate-x-full');
    overlay.classList.remove('hidden');
}
function closeSidebar() {
    sidebar.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
}
if(openBtn && overlay) {
    openBtn.addEventListener('click', openSidebar);
    overlay.addEventListener('click', closeSidebar);
    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeSidebar();
    });
}
// User dropdown
const userBtn = document.getElementById('userMenuBtn');
const userMenu = document.getElementById('userMenu');
if(userBtn && userMenu) {
    userBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        userMenu.classList.toggle('hidden');
    });
    document.addEventListener('click', (e) => {
        if (!userMenu.classList.contains('hidden')) {
            userMenu.classList.add('hidden');
        }
    });
}
</script>
@endpush
