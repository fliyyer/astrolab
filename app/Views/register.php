<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Register - Astrolab</title>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main class="h-[850px] relative flex items-center justify-center">
        <img class="w-full absolute h-[850px] object-cover" src="<?= base_url('assets/login.png') ?>" alt="Petir">
        <!-- Form Register -->
        <div class="relative z-10 px-12 py-16 rounded-lg shadow-lg w-full max-w-md" style="background: rgba(245, 245, 245, 0.80);">
            <h2 class="text-[32px] uppercase font-bold mb-6 text-[#11190C] text-center">Register</h2>
            <form id="registerForm" action="<?= base_url('register') ?>" method="post">
                <div class="mb-4">
                    <input type="name" id="name" placeholder="Name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <input type="email" id="email" placeholder="Email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-[14px]">
                    <input type="password" id="password" placeholder="Password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label class="text-[#11190C] font-semibold text-xl">Address</label>
                    <input type="text" id="country" placeholder="Country" name="country" class="shadow appearance-none border mt-3 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <input type="text" id="address" placeholder="Address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <input type="text" id="kecamatan" placeholder="Kecamatan" name="kecamatan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex gap-3 mb-4">
                    <input type="text" id="province" placeholder="Province" name="province" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <input type="text" id="postalCode" placeholder="Postal Code" name="postalCode" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <input type="text" id="phone" placeholder="Phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex flex-col justify-center">
                    <button class="bg-[#11190C] w-36 mx-auto px-12 py-2 my-6  rounded-[90px] text-[#E6FF03] text-[15px] font-bold">Submit</button>
                    <a href="/login" class="text-[#11190C] text-[15px] mt-[20px] mx-auto text-center">Have an account ? <span class="font-semibold">Login</span></a>
                </div>
            </form>
        </div>
    </main>
    <?php include('partials/footer.php'); ?>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var country = document.getElementById('country').value;
            var address = document.getElementById('address').value;
            var kecamatan = document.getElementById('kecamatan').value;
            var province = document.getElementById('province').value;
            var postalCode = document.getElementById('postalCode').value;
            var phone = document.getElementById('phone').value;
            if (name.trim() === '' || email.trim() === '' || password.trim() === '' || country.trim() === '' || address.trim() === '' || kecamatan.trim() === '' || province.trim() === '' || postalCode.trim() === '' || phone.trim() === '') {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill in all fields.',
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Account Created!',
                    text: 'Your account has been successfully created.',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '/login';
                    }
                });
            }
        });
    </script>

</body>

</html>