<x-app-layout>

    @section('custom_css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Nastaliq+Urdu">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    @endsection
 
        <x-slot name="header">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
        Prisoner Profile
    </h2>

    <div class="flex justify-center items-center float-right">

        <a href="{{route('prisoner.assistance', $prisoner->id)}}" class="no-print flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
            <span class="hidden md:inline-block ml-2">
                Add Legal Assistance
            </span>
        </a>

        <a href="{{route('prisionerShifted.create', $prisoner->id)}}" class="no-print flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
            <span class="hidden md:inline-block ml-2">Add Prisoner Shifting</span>
        </a>
        <a onclick="myFun()" class=" no-print flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
            </svg>
            <span class="hidden md:inline-block ml-2">Print</span>
        </a>
        <script>
            function myFun() {
                var prtContent = document.getElementById("prisoner");
                window.print(prtContent);

            }
        </script>
        <button type="">

        </button>

    </div>

    </x-slot>

    <div id="Prisoner" class="py-2">
        <div class="bg-gray-100" style="height: 1800px;">
            <div class="container mx-auto my-5 p-5">
                <div class="md:flex no-wrap md:-mx-2 ">
                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-green-400">
                            <div class="image overflow-hidden">


                                @if(!empty($prisoner->photo))
                                <img class="h-auto w-full mx-auto" src="{{url(Storage::url($prisoner->photo))}}" />

                                @else
                                <img class="h-auto w-full mx-auto" src="{{\App\Models\User::ProfilePhoto($prisoner->name)}}" />
                                @endif

                            </div>
                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$prisoner->name}}</h1>
                            {{-- <h3 class="text-gray-600 font-lg text-semibold leading-6">Father/Husband Name: Owner at Her Company Inc.</h3>--}}
                            {{-- <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet--}}
                            {{-- consectetur adipisicing elit.--}}
                            {{-- Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>--}}
                            <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                <li class="flex items-center py-3">
                                    <span>Gender</span>
                                    <span class="ml-auto">
                                        <span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$prisoner->gender}}</span></span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Iqama No</span>
                                    <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$prisoner->iqama_no}}</span></span>
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
                                    <span>Date of Birth</span>
                                    <span class="ml-auto">{{$prisoner->date_of_birth}}</span>
                                </li>


                                <li class="flex items-center py-3">
                                    <span>Province</span>
                                    <span class="ml-auto">{{$prisoner->provinces}}</span>
                                </li>

                                <li class="flex items-center py-3">
                                    <span>District</span>
                                    <span class="ml-auto">{{$prisoner->district}}</span>
                                </li>

                                <li class="flex items-center py-3">
                                    <span>Tehseel</span>
                                    <span class="ml-auto">{{$prisoner->tehseel}}</span>
                                </li>


                                <li class="flex items-center py-3">
                                    <span>Muhalah / Town</span>
                                    <span class="ml-auto">{{$prisoner->muhallah_town}}</span>
                                </li>


                                <li class="flex items-center py-3">
                                    <span>Contact Pakistan</span>
                                    <span class="ml-auto">{{$prisoner->contact_no_in_pakistan}}</span>
                                </li>


                                <li class="flex items-center py-3">
                                    <span>Prisoner Number</span>
                                    <span class="ml-auto">{{$prisoner->prisoner_number}}</span>
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
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">About</span>
                            </div>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Iqama Number</div>
                                        <div class="px-4 py-2">{{$prisoner->iqama_no}}
                                            <br>
                                            @if(!empty($prisoner->iqama))
                                            <a href="{{Storage::url($prisoner->iqama)}}" target="_blank" class="text-blue-700 hover:underline">View Iqama</a>
                                            @endif
                                            <br>
                                            @if(!empty($prisoner->other))
                                            <a href="{{Storage::url($prisoner->other)}}" target="_blank" class="text-blue-700 hover:underline">Other Attachment</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Passport number</div>
                                        <div class="px-4 py-2">{{$prisoner->passport_no}}

                                            <br>
                                            @if(!empty($prisoner->passport))
                                            <a href="{{Storage::url($prisoner->passport)}}" target="_blank" class="text-blue-700 hover:underline">View Passport</a>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Name & Father Name</div>
                                        <div class="px-4 py-2">{{$prisoner->name_and_father_name}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Arabic Name</div>
                                        <div class="px-4 py-2">{{$prisoner->arabic_name}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Detention Authority</div>
                                        <div class="px-4 py-2">{{$prisoner->detention_authority}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Region</div>
                                        <div class="px-4 py-2">{{$prisoner->region}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Detention City</div>
                                        <div class="px-4 py-2">{{$prisoner->detention_city}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Prison</div>
                                        <div class="px-4 py-2">{{$prisoner->prison}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Date of Detention Hijri</div>
                                        <div class="px-4 py-2">{{$prisoner->hijri_detention_date}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Date of Detention GG</div>
                                        <div class="px-4 py-2">{{$prisoner->gregorian_detention_date}}</div>
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
                                        <div class="px-4 py-2 font-semibold">Sentence</div>
                                        <div class="px-4 py-2">{{$prisoner->sentence_in_years}} Years and {{$prisoner->sentence_in_months}} Months</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Detention Period</div>
                                        <div class="px-4 py-2">

                                            @if(!empty($prisoner->gregorian_detention_date))
                                            {{\Carbon\Carbon::parse($prisoner->gregorian_detention_date)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Expected Release Date</div>
                                        <div class="px-4 py-2">
                                            {{$prisoner->expected_release_date}}
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Financial claim</div>
                                        <div class="px-4 py-2">{{$prisoner->financial_claim}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Penalty / Fine</div>
                                        <div class="px-4 py-2">{{$prisoner->penalty_fine}}</div>
                                    </div>





                                </div>

                                <hr>
                                <h1 class="text4xl text-center m-4 font-bold">CASE DETAILS</h1>
                                <hr>


                                <div class="grid md:grid-cols-2 text-sm">

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Court</div>
                                        <div class="px-4 py-2">{{$prisoner->case_court_name}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">City</div>
                                        <div class="px-4 py-2">{{$prisoner->case_city}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Case number</div>
                                        <div class="px-4 py-2">{{$prisoner->case_number}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Prisoner number</div>
                                        <div class="px-4 py-2">{{$prisoner->case_prisoner_number}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Claim number</div>
                                        <div class="px-4 py-2">{{$prisoner->case_claim_number}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Sadad number</div>
                                        <div class="px-4 py-2">{{$prisoner->case_sadad_number}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Claimer name</div>
                                        <div class="px-4 py-2">{{$prisoner->case_claimer_name}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Claimer contact number</div>
                                        <div class="px-4 py-2">{{$prisoner->case_claimer_contact_number}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Consular access date</div>
                                        <div class="px-4 py-2">{{$prisoner->case_consular_access_date}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">ETD issuance date</div>
                                        <div class="px-4 py-2">{{$prisoner->etd_issuance_date}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">ETD number</div>
                                        <div class="px-4 py-2">{{$prisoner->etd_number}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Case closed</div>
                                        <div class="px-4 py-2">{{$prisoner->case_closed}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Closing Date Hijri</div>
                                        <div class="px-4 py-2">{{$prisoner->case_closing_date_hijri}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Closing Date GG</div>
                                        <div class="px-4 py-2">{{$prisoner->case_closing_date_gg}}</div>
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
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide">Prisoner Shifting</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        @if($prisoner->prisoner_shifting->isNotEmpty())
                                        @foreach($prisoner->prisoner_shifting as $ps)
                                        <li>
                                            <div class="">{{ucwords(strtolower('DETENTION AUTHORITY'))}}: {{$ps->shifted_to_other_department}}</div>
                                            <div class="">{{ucwords(strtolower('DETENTION CITY'))}}: {{$ps->shifted_to_other_department}}</div>
                                            <div class="">Shifted To Other Department: {{$ps->shifted_to_other_department}}</div>
                                            <div class="text-gray-500">Shifting Date Gregorian: {{\Carbon\Carbon::parse($ps->shifting_date_gregorian)->format('d-m-Y')}}</div>
                                            <div class="text-gray-500">Shifting Date Hijri: {{$ps->shifting_date_hijri}}</div>
                                        </li>
                                        <hr>
                                        @endforeach
                                        @endif

                                    </ul>
                                </div>
                            </div>
                            <div class="my-4"></div>
                            <div class="grid grid-cols-2">
                                <div>
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                        <span clas="text-green-500">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide">Prisoner Assistance</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        @if($prisoner->assistance->isNotEmpty())
                                        @foreach($prisoner->assistance as $ps)
                                        <li>
                                            <div class="">{{ucwords(strtolower('Date'))}}: {{\Carbon\Carbon::parse($ps->date)->format('d-m-Y')}}</div>
                                            <div class="">{{ucwords(strtolower('Type'))}}: {{$ps->type}}</div>
                                            <div class="">Description: {{$ps->description}}</div>
                                            <div class="text-gray-500">Attachment:
                                                @if(!empty($ps->attachment))
                                                <a href="{{Storage::url($ps->attachment)}}" class="text-blue-500 hover:underline"> Attachment</a>
                                                @else
                                                N/A
                                                @endif

                                            </div>
                                        </li>
                                        <hr>
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
        $(document).ready(function() {
            $('.select2').select2();
            $('.cnic_mask').mask('00000-0000000-0');
            $('.number_mask').mask('0000-0000000');
            $('.phone_mask').mask('00000-000000');
        });


        $(function() {
            $('#datepicker').keypress(function(event) {
                event.preventDefault();
                return false;
            });
        });


        const targetDiv = document.getElementById("filters");
        const btn = document.getElementById("toggle");
        btn.onclick = function() {
            if (targetDiv.style.display !== "none") {
                targetDiv.style.display = "none";
            } else {
                targetDiv.style.display = "block";
            }
        };
    </script>
    @endsection

</x-app-layout>