<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Luxe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">
    <!-- Navbar -->
    <nav class="flex flex-wrap items-center justify-between p-4 border-b border-black space-y-4 sm:space-y-0">
        <div class="flex space-x-4 lg:space-x-8">
            <a href="{{ route('leatherGoods') }}" class="hover:text-gray-500">Leather Goods</a>
            <a href="{{ route('fragrances') }}" class="hover:text-gray-500">Fragrances</a>
            <a href="{{ route('accessories') }}" class="hover:text-gray-500">Accessories</a>
        </div>
        <div class="flex items-center space-x-4 lg:space-x-6">
            <span class="text-2xl sm:text-4xl font-serif">Aurora Luxe</span>
            <div class="flex space-x-4 items-center">
                <a href="{{ route('cart') }}">
                    <img src="{{ asset('images/cart.png') }}" alt="Cart Icon" class="w-6 h-6 hover:opacity-75" />
                </a>
                <a href="{{ route('myprofile') }}">
                    <img src="{{ asset('images/profile icon.png') }}" alt="Profile Icon" class="w-6 h-6 hover:opacity-75" />
                </a>
            </div>
        </div>
    </nav>

    <!-- Cover Image -->
    <div class="mt-4 mx-auto max-w-full">
        <img
            src="https://montaka.com/wp-content/uploads/elementor/thumbs/Luxury-resale-cover-scaled-2-pxem0mlp1o9yp0fp4a4ag4tvp9i9qobk1snu58yt0w.jpg"
            alt="Cover Page"
            class="w-full h-auto object-cover"
        />
        <h2 class="text-3xl sm:text-4xl text-center font-bold mt-6">New Arrivals</h2>
    </div>

    <!-- New Arrivals Section -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img class="w-full h-48 object-cover" src="{{ $product->ImageUrl }}" alt="Product Image">
                    </div>
                @endforeach
            @else
                <p class="text-center text-gray-600">No new arrivals available.</p>
            @endif
        </div>
        <div class="flex justify-center mt-6">
            <a href="{{ route('shop') }}" class="bg-gray-700 text-white py-2 px-6 rounded hover:bg-gray-600">See All</a>
        </div>
    </div>

    <!-- Paragraph Section -->
    <div class="text-center mt-10 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold">Experience True Luxury</h2>
        <p class="mt-4 max-w-2xl mx-auto text-gray-700">
            Luxury is more than a statement—it’s a way of life. Indulge in the finest craftsmanship, where every detail tells
            a story of sophistication and elegance. From rare finds to timeless treasures, embrace the extraordinary and
            elevate your lifestyle with unmatched exclusivity.
        </p>
        <br>
    </div>

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