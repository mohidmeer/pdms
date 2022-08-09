<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
           Reports
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-6 gap-6 ">
                <a href="{{route('report.statistics')}}" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="mt-1 text-base  font-bold text-gray-600">
                                   Statistics
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('report.crime-wise')}}" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="mt-1 text-base  font-bold text-gray-600">
                                    Crime Wise
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('report.prison-wise')}}" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="mt-1 text-base  font-bold text-gray-600">
                                    Prison Wise
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('report.region-wise')}}" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="mt-1 text-base  font-bold text-gray-600">
                                    Region Wise
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
