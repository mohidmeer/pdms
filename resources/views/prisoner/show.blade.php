<x-app-layout>

    @section('custom_css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Nastaliq+Urdu">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
            Prisoner Profile
        </h2>

        <div class="flex justify-center items-center float-right">
            <a href="{{route('prisionerShifted.create', $prisoner->id)}}" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                <span class="hidden md:inline-block ml-2">Add Prisoner Shifting</span>
            </a>
        </div>

    </x-slot>

    <div class="py-2">
        <div class="bg-gray-100">
            <div class="container mx-auto my-5 p-5">
                <div class="md:flex no-wrap md:-mx-2 ">
                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-green-400">
                            <div class="image overflow-hidden">


                                @if(!empty($employee->profile_path))
                                    <img class="h-auto w-full mx-auto"
                                         src="{{url(Storage::url($prisoner->attachment))}}"/>

                                @else
                                    <img class="h-auto w-full mx-auto"
                                         src="{{\App\Models\User::ProfilePhoto($prisoner->name)}}"/>
                                @endif

                            </div>
                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$prisoner->name}}</h1>
                            {{--                            <h3 class="text-gray-600 font-lg text-semibold leading-6">Father/Husband Name: Owner at Her Company Inc.</h3>--}}
                            {{--                            <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet--}}
                            {{--                                consectetur adipisicing elit.--}}
                            {{--                                Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>--}}
                            <ul
                                class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                <li class="flex items-center py-3">
                                    <span>Gender</span>
                                    <span class="ml-auto">
                                        <span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$prisoner->gender}}</span></span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Iqama No</span>
                                    <span class="ml-auto"><span
                                            class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$prisoner->iqama_no}}</span></span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Passport No</span>
                                    <span class="ml-auto">{{$prisoner->passport_no}}</span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>CNIC/NICOB</span>
                                    <span class="ml-auto">{{$prisoner->cnic}}</span>
                                </li>


                                <li class="flex items-center py-3">
                                    <span>Prisoner Number</span>
                                    <span class="ml-auto">{{$prisoner->prisoner_number}}</span>
                                </li>


                                <li class="flex items-center py-3">
                                    <span>Pakistan City</span>
                                    <span class="ml-auto">{{$prisoner->pakistan_city}}</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End of profile card -->
                        <div class="my-4"></div>
                        <!-- Friends card -->

                        <!-- End of friends card -->
                    </div>
                    <!-- Right Side -->
                    <div class="w-full md:w-9/12 mx-2 h-64">
                        <!-- Profile tab -->
                        <!-- About Section -->
                        <div class="bg-white p-3 shadow-sm rounded-sm">
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </span>
                                <span class="tracking-wide">About</span>
                            </div>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Name</div>
                                        <div class="px-4 py-2">{{$prisoner->name}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Father/Husband Name</div>
                                        <div class="px-4 py-2">{{$prisoner->father_husband_name}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Hijri Detention Date</div>
                                        <div class="px-4 py-2">{{$prisoner->hijri_detention_date}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Gregorian Detention Date</div>
                                        <div class="px-4 py-2">{{\Carbon\Carbon::parse($prisoner->gregorian_detention_date)->format('d-m-Y')}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Detention Authority</div>
                                        <div class="px-4 py-2">{{$prisoner->detention_authority}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Detention City</div>
                                        <div class="px-4 py-2">{{$prisoner->detention_city}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Prison Status</div>
                                        <div class="px-4 py-2">{{$prisoner->prison_status}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Charges Crime</div>
                                        <div class="px-4 py-2">

                                            @if($prisoner->prisoner_charges->isNotEmpty())
                                                @foreach($prisoner->prisoner_charges as $charges)
                                                    {{$charges->crime_charges}},
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Case Details</div>
                                        <div class="px-4 py-2">{{$prisoner->case_details}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Prison</div>
                                        <div class="px-4 py-2">{{$prisoner->prison}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Detention Period</div>
                                        <div class="px-4 py-2">{{$prisoner->detention_period}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Private Rights Haq e Khas</div>
                                        <div class="px-4 py-2">{{$prisoner->private_rights_haq_e_khas}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Expected Release Date Status</div>
                                        <div class="px-4 py-2">{{$prisoner->expected_release_date_status}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">ETD Date</div>
                                        <div class="px-4 py-2">{{$prisoner->etd_date}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Actual Release Date Hijri</div>
                                        <div class="px-4 py-2">{{$prisoner->actual_release_date_hijri}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Actual Release Date Gregorian</div>
                                        <div class="px-4 py-2">{{$prisoner->actual_release_date_gregorian}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Attachment</div>
                                        <div class="px-4 py-2">
                                            <a href="{{\Illuminate\Support\Facades\Storage::url($prisoner->attachment)}}" target="_blank">Attachment Document</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of about section -->

                        <div class="my-4"></div>

                        <!-- Experience and education -->
                        <div class="bg-white p-3 shadow-sm rounded-sm">
                            <div class="grid grid-cols-2">
                                <div>
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </span>
                                        <span class="tracking-wide">Prisoner Shifting</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        @if($prisoner->prisoner_shifting->isNotEmpty())
                                            @foreach($prisoner->prisoner_shifting as $ps)
                                                <li>
                                                    <div class="text-teal-600">Shifted To Other Department: {{$ps->shifted_to_other_department}}</div>
                                                    <div class="text-gray-500 text-xs">Shifting Date Gregorian: {{\Carbon\Carbon::parse($ps->shifting_date_gregorian)->format('d-m-Y')}}</div>
                                                </li>
                                            @endforeach
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Experience and education grid -->
                    </div>
                    <!-- End of profile tab -->
                </div>
            </div>
        </div>
    </div>
    </div>


    @section('custom_footer')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
        <script src="https://emis.ajk.gov.pk/assets/js/jquery.mask.js" defer></script>
        <script>
            $(document).ready(function () {
                $('.select2').select2();
                $('.cnic_mask').mask('00000-0000000-0');
                $('.number_mask').mask('0000-0000000');
                $('.phone_mask').mask('00000-000000');
            });


            $(function () {
                $('#datepicker').keypress(function (event) {
                    event.preventDefault();
                    return false;
                });
            });
        </script>
    @endsection

</x-app-layout>
