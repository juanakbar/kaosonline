@extends('layout.frontend')
@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="w-full max-w-screen-lg flex justify-between">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">All Product</h2>

            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 mb-5">
                {{-- Product --}}
                @forelse ($products as $product)
                    <div
                        class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src={{ $product->picture }} alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mb-5 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{ $product->category->name }}</span>
                                <h5 class="mb-2 mt-3 text-md font-normal tracking-tight text-gray-900 dark:text-white">
                                    {{ $product->name }}</h5>
                            </a>
                            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
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
            <div class="mt-10">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
