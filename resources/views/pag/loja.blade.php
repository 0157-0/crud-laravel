
@extends('layouts.app')

@section('content')

    <!-- component -->

    

<!-- cards -->
@foreach($items as $item)


<div tabindex="0" class="focus:outline-none">
    <!-- Remove py-8 -->
    <div class="mx-auto container py-8">
        <div class="flex flex-wrap items-center lg:justify-between justify-center">
            <!-- Card 1 -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="person capturing an image" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap (1).png" tabindex="0" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{$item->name}}</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">{{$item->valor}}</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone X1 is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 1 Ends -->
            <!-- Card 2 -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="person capturing an image" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap (1).png" tabindex="0" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{$item->name}}</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 Ends -->
            <!-- Card 3  -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="person capturing an image" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap (1).png" tabindex="0" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X3</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 Ends -->
            <!-- Card 4  -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="person capturing an image" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap (1).png" tabindex="0" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X4</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 Ends -->
        </div>
        <div class="flex flex-wrap items-center lg:justify-between justify-center pb-10 mt-16">
            <!-- Card 1 -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X5</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 1 Ends -->
            <!-- Card 2 -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X6</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 Ends -->
            <!-- Card 3  -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X7</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 Ends -->
            <!-- Card 4  -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X8</h2>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X9</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 9 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X10</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->


<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X11</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X12</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X13</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X14</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X15</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X16</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X17</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X18</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X19</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

<!-- Card 4  -->
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div>
        <img alt="girl texting" src="https://cdn.tuk.dev/assets/templates/classified/Bitmap.png" class="focus:outline-none w-full h-44" />
    </div>
    <div class="bg-white">
        <div class="flex items-center justify-between px-4 pt-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                </svg>
            </div>
            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center">
                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">iphone X20</h2>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
            </div>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
            <div class="flex mt-4">
                <div>
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                </div>
                <div class="pl-2">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-4">
                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 Ends -->

@endforeach
        </div>
    </div>
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
</div>
 <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
<script>
    if (!window.ShadyDOM) window.ShadyDOM = { force: true, noPatch: true };
</script>

@endsection