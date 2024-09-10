<div class=" h-14 bg-blue-300 flex gap-4 p-4 fixed w-screen">
    <x-navlink href='/' :active="request()->is('/')">Home</x-navlink>
    <x-navlink href='/about' :active="request()->is('/about')">About</x-navlink>
    <x-navlink href='/blog' :active="request()->is('/blog')">Blog</x-navlink>
    <x-navlink href='/contact' :active="request()->is('/contact')">Contact</x-navlink>
</div>
