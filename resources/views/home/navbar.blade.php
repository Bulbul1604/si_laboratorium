<nav
    class="fixed z-10 flex content-center text-[#031D44] items-center justify-between w-full px-4 py-6 bg-[#f4f2ed] lg:px-48 md:px-12">
    <div class="flex items-center">
        <div class="mx-2 text-xl">
            <span class="font-bold font-lab">Laboratorium</span>
            <h6 class="font-extrabold ">Teknik Informatika</h6>
        </div>
    </div>
    <ul class="items-center hidden md:flex">
        <li class="mx-3 growing-underline">
            <a href="features" class="font-medium transition duration-700 hover:font-bold">About Us</a>
        </li>
        <li class="mx-3 growing-underline">
            <a href="pricing" class="font-medium transition duration-700 hover:font-bold">Contact</a>
        </li>
    </ul>
    <div class="hidden md:block">
        <a href="{{ route('login') }}"
            class="bg-[#031D44] text-white py-1 px-4 rounded hover:bg-[#04395E] transition duration-500">Login</a>
    </div>
    <div id="showMenu" class="cursor-pointer md:hidden">
        <img src='dist/assets/logos/Menu.svg' alt="Menu icon" />
    </div>
</nav>
<!-- Mobile Navigation -->
<div id='mobileNav' class="fixed top-0 left-0 z-20 hidden w-full h-full px-4 py-6 bg-[#f4f2ed] animate-fade-in-down">
    <div id="hideMenu" class="flex justify-end">
        <img src='dist/assets/logos/Cross.svg' alt="" class="w-16 h-16 cursor-pointer" />
    </div>
    <ul class="flex flex-col items-center mx-8 my-24 text-2xl">
        <li class="my-6">
            <a href="howitworks">About Us</a>
        </li>
        <li class="my-6">
            <a href="features">Contact</a>
        </li>
        <li class="my-6">
            <a href="{{ route('login') }}"
                class="bg-[#031D44] text-white py-1 px-4 rounded hover:bg-[#04395E] transition duration-500">Login</a>
        </li>
    </ul>
</div>

@push('script')
<script>
    console.log(document.querySelector("#showMenu"))
    document.querySelector("#showMenu").addEventListener("click", function (event) {
        document.querySelector("#mobileNav").classList.remove("hidden")
    })

    document.querySelector("#hideMenu").addEventListener("click", function (event) {
        document.querySelector("#mobileNav").classList.add("hidden")
    })
</script>
@endpush
