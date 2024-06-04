<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>Checkout - Astrolab</title>
    <style>
        .quantity-button {
            cursor: pointer;
            padding: 0 10px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin: 0 5px;
        }

        .quantity-display {
            padding: 0 10px;
            font-weight: bold;
        }
    </style>
    <script>
        function updateQuantity(action, id) {
            const quantityElement = document.getElementById('quantity-' + id);
            let quantity = parseInt(quantityElement.textContent);

            if (action === 'add') {
                quantity++;
            } else if (action === 'subtract' && quantity > 1) {
                quantity--;
            }

            quantityElement.textContent = quantity;
        }

        function pay() {
            fetch('<?= base_url('payment/token') ?>', {
                    method: 'GET',
                })
                .then(response => response.json())
                .then(data => {
                    if (data.snapToken) {
                        snap.pay(data.snapToken, {
                            onSuccess: function(result) {
                                window.location.href = '<?= base_url() ?>';
                            },
                            onPending: function(result) {
                                window.location.href = '<?= base_url() ?>';
                            },
                            onError: function(result) {
                                console.log(result);
                                window.location.href = '<?= base_url() ?>';
                            },
                            onClose: function() {
                                alert('You closed the popup without finishing the payment');
                            }
                        });
                    } else {
                        console.error('Snap Token is not available');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-RfHJfZwaUAMDPomc"></script>
</head>

<body class="bg-[#CFC8BC]">
    <?php include('partials/navbar.php'); ?>
    <main class="h-[850px] relative flex items-center justify-center">
        <img class="w-full absolute h-[850px] object-cover" src="<?= base_url('assets/login.png') ?>" alt="Petir">
        <div class="z-10 w-full flex max-w-7xl gap-10 mx-auto">
            <div class="flex flex-col bg-white bg-opacity-70 px-10 py-8">
                <div class="flex items-center gap-3">
                    <img class="w-[177px] h-[177px]" src="<?= base_url('assets/d1.png') ?>" alt="">
                    <div>
                        <p class="w-[200px]">Baloon Sleeve Shirt Navy</p>
                        <p>Size : <span class="font-bold">M</span></p>
                    </div>
                    <p class="w-[100px]">IDR 2.309.000</p>
                    <div class="flex items-center">
                        <div class="quantity-button" onclick="updateQuantity('subtract', 1)">-</div>
                        <div id="quantity-1" class="quantity-display">1</div>
                        <div class="quantity-button" onclick="updateQuantity('add', 1)">+</div>
                    </div>
                </div>
                <div class="flex my-6 items-center gap-3">
                    <img class="w-[177px] h-[177px]" src="<?= base_url('assets/category1.png') ?>" alt="">
                    <div>
                        <p class="w-[200px]">Bataille Hors - Piste</p>
                        <p>Size : <span class="font-bold">250ML</span></p>
                    </div>
                    <p class="w-[100px]">IDR 151.200</p>
                    <div class="flex items-center">
                        <div class="quantity-button" onclick="updateQuantity('subtract', 2)">-</div>
                        <div id="quantity-2" class="quantity-display">1</div>
                        <div class="quantity-button" onclick="updateQuantity('add', 2)">+</div>
                    </div>
                </div>
                <div class="flex my-6 items-center gap-3">
                    <img class="w-[177px] h-[177px]" src="<?= base_url('assets/jw4.png') ?>" alt="">
                    <div>
                        <p class="w-[200px]">Liontine Segi Jewel</p>
                        <p>Size : <span class="font-bold">-</span></p>
                    </div>
                    <p class="w-[100px]">IDR 151.200</p>
                    <div class="flex items-center">
                        <div class="quantity-button" onclick="updateQuantity('subtract', 3)">-</div>
                        <div id="quantity-3" class="quantity-display">1</div>
                        <div class="quantity-button" onclick="updateQuantity('add', 3)">+</div>
                    </div>
                </div>
                <div class="flex justify-end items-center mt-4 gap-5">
                    <div>
                        <p>Subtotal : <span class="font-bold">IDR 2.611.400</span></p>
                        <p class="text-sm">Taxes and shipping calculated at checkout</p>
                    </div>
                    <button onclick=pay() class="bg-[#11190C] px-4 py-2 my-6 rounded-[4px] text-[#E6FF03] text-[15px] font-bold">Place Your Order</button>
                </div>
            </div>
            <div class="bg-white bg-opacity-70 h-[500px] shadow-lg w-5/12 rounded-lg py-[75px] px-[50px]">
                <h1 class="text-center text-[#11190C] text-[32px] font-bold">Profile</h1>
                <div class="flex flex-col gap-8">
                    <div>
                        <label for="name" class="font-bold">Name</label>
                        <input type="text" id="name" value="<?= esc($name) ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" placeholder="Name">
                    </div>
                    <div>
                        <label for="email" class="font-bold">Email</label>
                        <input type="email" id="email" value="<?= esc($email) ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" placeholder="Email">
                    </div>
                    <div>
                        <label for="address" class="font-bold">Address</label>
                        <textarea name="address" id="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button class="text-[#11190C] font-bold">Edit Address</button>
                </div>
            </div>
        </div>
    </main>
    <?php include('partials/footer.php'); ?>
</body>

</html>