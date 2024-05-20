<nav class="bg-[#A29F8F] shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-6">
        <div class="flex gap-20">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?= base_url('assets/nav.png') ?>" class="h-14 w-60" alt="Flowbite Logo" />
            </a>
            <ul class="flex items-center font-semibold gap-[79px]">
                <li>
                    <a href="/collection">COLLECTION</a>
                </li>
                <li>
                    <a href="/brands">BRANDS</a>
                </li>
                <li>
                    <a href="/features">FEATURES</a>
                </li>
            </ul>
        </div>
        <?php if (session()->has('userId')) : ?>
            <div class="relative">
                <button id="userDropdownBtn" class="text-[#11190C] rounded-md px-5 uppercase font-semibold py-2 focus:outline-none">
                    <?= session('name') ?>
                </button>
                <div id="userDropdown" class="hidden absolute right-0 top-full mt-1 bg-white shadow-md rounded-md overflow-hidden transition-all duration-300">
                    <button onclick="window.location.href='<?= base_url('logout') ?>'" class="block px-4 py-2 text-[#11190C] hover:bg-gray-200">Logout</button>
                </div>
            </div>
            <script>
                document.getElementById('userDropdownBtn').addEventListener('click', function() {
                    var dropdown = document.getElementById('userDropdown');
                    dropdown.classList.toggle('hidden');
                });
            </script>
        <?php else : ?>
            <a href="/login" class="text-[#11190C] rounded-md px-5 uppercase font-semibold py-2">Login</a>
        <?php endif; ?>
    </div>
</nav>