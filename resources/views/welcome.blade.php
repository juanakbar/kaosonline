@extends('layout.frontend')
@section('content')
    <section class="bg-gray-800 text-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src={{ asset('img/hero/hero.png') }} alt=""
                    class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h3 class="text-5xl font-bold leading-none sm:text-3xl">Buat Kaos Custom
                    <span class=" text-blue-400">&</span> Komunitas Kamu Sekarang
                </h3>
                <p class="mt-6 mb-8 text-lg sm:mb-12">Dictum aliquam porta in condimentum ac integer
                    <br class="hidden md:inline lg:hidden">turpis pulvinar, est scelerisque ligula sem
                </p>
                <div
                    class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a type="button"
                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Desain
                        Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                {{-- Product --}}
                @forelse ($products as $product)
                    <div
                        class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href={{ route('product.show', $product) }}>
                            <img class="rounded-t-lg" src={{ $product->picture }} alt="">
                        </a>
                        <div class="p-5">
                            <a href={{ route('product.show', $product) }}>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mb-5 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{ $product->category->name }}</span>
                                <h5 class="mb-2 mt-3 text-md font-normal tracking-tight text-gray-900 dark:text-white">
                                    {{ $product->name }}</h5>
                            </a>
                            <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">@currency($product->price)</p>
                            <a href={{ route('product.show', $product) }}
                                class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Buy Now
                                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="text-center container mx-auto">
                        <h3 class="text-2xl text-centerfont-bold tracking-tight text-gray-900">No Product</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
