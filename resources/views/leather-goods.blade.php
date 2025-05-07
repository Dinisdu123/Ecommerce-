<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Luxe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-white text-black">
    <!-- Nav Bar -->
    <nav class="flex flex-wrap items-center justify-between p-4 border-b border-black">
        <div class="flex space-x-8">
            <a href="{{ route('leatherGoods') }}" class="hover:text-gray-500">Leather Goods</a>
            <a href="{{ route('fragrances') }}" class="hover:text-gray-500">Fragrances</a>
            <a href="{{ route('accessories') }}" class="hover:text-gray-500">Accessories</a>
        </div>
        <div class="flex items-center space-x-6">
            <span class="text-4xl font-serif">Aurora Luxe</span>
            <div class="flex space-x-4 items-center">
                <a href="{{ route('cart') }}">
                    <img src="{{ asset('images/cart.png') }}" alt="Cart" class="w-6 h-6 hover:opacity-75">
                </a>
                <a href="{{ route('myprofile') }}">
                    <img src="{{ asset('images/profile icon.png') }}" alt="Profile" class="w-6 h-6 hover:opacity-75">
                </a>
            </div>
        </div>
    </nav>

    <!-- Nav bar for products -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mx-4 sm:mx-12 mt-8">
        <a href="#shoulder-bags" class="flex flex-col items-center">
            <img src="https://cdn.cosmostore.org/cache/front/shop/products/677/2064939/650x650.jpg"
                alt="Prada Shoulder Bag" class="w-48 h-48 mb-2">
            <span class="text-center text-lg font-medium">Shoulder Bag</span>
        </a>
        <a href="#mini-bags" class="flex flex-col items-center">
            <img src="https://cdn-images.farfetch-contents.com/25/76/87/10/25768710_55982729_480.jpg" alt="Mini Bags" class="w-48 h-48 mb-2">
            <span class="text-center text-lg font-medium">Mini Bag</span>
        </a>
        <a href="#backpacks" class="flex flex-col items-center">
            <img src="https://cdn-images.farfetch-contents.com/26/41/00/43/26410043_56000810_1000.jpg" alt="Backpacks" class="w-48 h-48 mb-2">
            <span class="text-center text-lg font-medium">Backpacks</span>
        </a>
        <a href="#wallets" class="flex flex-col items-center">
            <img src="https://cdn-images.farfetch-contents.com/27/53/93/86/27539386_57294969_1000.jpg" alt="Wallets" class="w-48 h-48 mb-2">
            <span class="text-center text-lg font-medium">Wallets</span>
        </a>
    </div>

    <!-- Products Each cat -->
    @php
        $categories = [
            'shoulder-bags' => ['name' => 'Shoulder Bags', 'data' => $shoulderBag],
            'mini-bags' => ['name' => 'Mini Bags', 'data' => $miniBags],
            'backpacks' => ['name' => 'Backpacks', 'data' => $backpacks],
            'wallets' => ['name' => 'Wallets', 'data' => $wallets]
        ];
    @endphp

    @foreach ($categories as $id => $category)
        <div id="{{ $id }}" class="mt-10 mx-4 sm:mx-12">
            <h2 class="text-center text-3xl font-bold">{{ $category['name'] }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                @if ($category['data']->count() > 0)
                    @foreach ($category['data'] as $product)
                        <div class="flex flex-col items-center text-center">
                            <a href="{{ route('product', ['name' => urlencode($product->Name)]) }}">
                                <img src="{{ $product->ImageUrl }}" alt="{{ $product->Name }}" class="w-48 h-48 mb-4 object-cover">
                            </a>
                            <h3 class="text-lg font-semibold mb-2">{{ $product->Name }}</h3>
                            <p>LKR {{ number_format($product->Price, 2) }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="text-center col-span-4">No products found.</p>
                @endif
            </div>
        </div>
    @endforeach

    <!-- Footer -->
    <footer class="bg-gray-200 text-center lg:text-left py-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col sm:flex-row justify-between text-sm text-gray-800 space-y-6 sm:space-y-0">
                <div>
                    <h6 class="font-bold mb-4">Quick Links</h6>
                    <ul>
                        <li class="mb-2"><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li class="mb-2"><a href="{{ route('newArrivals') }}" class="hover:underline">New Arrivals</a></li>
                        <li class="mb-2"><a href="{{ route('shop') }}" class="hover:underline">Shop</a></li>
                        <li><a href="{{ route('aboutUs') }}" class="hover:underline">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="font-bold mb-4">Categories</h6>
                    <ul>
                        <li class="mb-2"><a href="{{ route('leatherGoods') }}" class="hover:underline">Leather Goods</a></li>
                        <li class="mb-2"><a href="{{ route('fragrances') }}" class="hover:underline">Fragrances</a></li>
                        <li><a href="{{ route('accessories') }}" class="hover:underline">Accessories</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="font-bold mb-4">Contact Us</h6>
                    <p class="mb-2">+94 77 123 4567</p>
                    <p class="mb-2">+94 11 234 5678</p>
                    <p class="mb-4">auroraluxe@gmail.com</p>
                    <div class="flex space-x-4 justify-center sm:justify-start">
                        <a href="https://www.instagram.com" class="w-6 h-6 rounded-full bg-gray-300 flex items-center justify-center">
                            <img src="https://i.pinimg.com/474x/1e/d6/e0/1ed6e0a9e69176a5fdb7e090a1046b86.jpg" alt="Instagram Logo" class="w-4 h-4">
                        </a>
                        <a href="https://www.facebook.com" class="w-6 h-6 rounded-full bg-gray-300 flex items-center justify-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQxOMUNq_G-2Tqqcm2l1UYB3WCjRHx6KI2xg&s" alt="Facebook Logo" class="w-4 h-4">
                        </a>
                        <a href="https://www.x.com" class="w-6 h-6 rounded-full bg-gray-300 flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/X_logo.jpg/480px-X_logo.jpg" alt="X Logo" class="w-4 h-4">
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-6 text-gray-700 text-xs">
                © 2024 Aurora Luxe. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>