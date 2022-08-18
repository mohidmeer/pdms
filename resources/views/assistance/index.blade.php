<x-app-layout>

    @section('custom_css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Nastaliq+Urdu">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
            {{ __('Prisoner List') }}
        </h2>

        <div class="flex justify-center items-center float-right">


            <a href="javascript:;" id="toggle"
               class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2"
               title="Members List">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                </svg>
                <span class="hidden md:inline-block ml-2">Search Filters</span>
            </a>

        </div>
    </x-slot>


    <div class="max-w-7xl mx-auto mt-12 px-4 sm:px-6 lg:px-8" style="display: none" id="filters">
        <div class="rounded-xl p-4 bg-white shadow-lg">
            <form action="{{route('assistance.index')}}">
                <div class="mb-3 -mx-2 flex items-end">
                    <div class="px-2 w-1/3">
                        <div>
                            <label class="font-bold text-sm mb-2 ml-1">Search</label>
                            <input name="filter[search_string]" value="" class="w-full px-3 py-2 mb-1 border-2
                                border-gray-200 rounded-md focus:outline-none
                                focus:border-indigo-500 transition-colors cursor-pointer"/>

                        </div>
                    </div>


                    <div class="px-2 w-1/3">
                        <div>
                            <label class="font-bold text-sm mb-2 ml-1">Prisoner ID</label>
                            <input name="filter[prisoner_id]" value="" class="w-full px-3 py-2 mb-1 border-2
                                border-gray-200 rounded-md focus:outline-none
                                focus:border-indigo-500 transition-colors cursor-pointer"/>

                        </div>
                    </div>

                    <div class="px-2 w-1/3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               for="prison">
                            Legal / Counselor
                        </label>
                        <select name="filter[type]" id="prison"
                                class=" form-select w-full px-3 py-2 mb-1 border-2
                                border-gray-200 rounded-md focus:outline-none
                                focus:border-indigo-500 transition-colors cursor-pointer">
                            <option value="" selected="">Please Select</option>
                            <option value="Legal Assistance">Legal Assistance</option>
                            <option value="Counselor Access">Counselor Access</option>
                        </select>
                    </div>

                </div>

                <div class="text-center">
                    <button type="submit" class=" px-4 py-2
                                bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white
                                uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700
                                focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition ">
                        Search
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="py-12">

        <div class="max-w-12xl mx-auto sm:px-4 lg:px-8">

            <div class="relative overflow-x-auto shadow-md ">
                <table
                    class="w-full text-xs border-collapse border border-slate-400 text-left text-black dark:text-gray-400">
                    <thead class="text-xs text-black uppercase bg-gray-50 dark:bg-gray-700 ">
                    <tr class="bg-gray-200 text-gray-600 uppercase text-xs leading-normal">
                        <th class="py-3 px-6 text-left border border-black">date</th>
                        <th class="py-3 px-6 text-left border border-black">Prisoner ID</th>
                        <th class="py-3 px-6 text-center border border-black">Access type</th>
                        <th class="py-3 px-6 text-center border border-black">description</th>
                        <th class="py-3 px-6 text-center border border-black">Attachment</th>
                        <th class="py-3 px-6 text-center border border-black">Actions</th>
                        {{--                        @endcanany--}}
                    </tr>
                    </thead>
                    <tbody class="text-black text-xs font-light">
                    @foreach($prison as $p)
                        <tr class="border-b border-gray-200 bg-white text-black hover:bg-gray-100">
                            <td class="py-3 px-6 text-center border border-black ">
                                    <span>{{$p->date}}</span>
                            </td>
                            <td class="py-3 px-6 text-center border border-black ">
                                {{$p->prisoner_id}}
                            </td>
                            <td class="py-3 px-6 text-center border border-black ">
                                {{$p->type}}
                            </td>
                            <td class="py-3 px-6 text-center border border-black ">
                                {{$p->description}}
                            </td>
                            <td class="py-3 px-6 text-center border border-black ">
                                @if(empty($p->attachment))
                                    N/A
                                @else
                                    <a href="{{Storage::url($p->attachment)}}">
                                        Attachment
                                    </a>
                                @endif

                            </td>



                            {{--                            @canany(['Update Employee', 'Delete Employee'])--}}
                            <td class="py-3 px-6 text-center border border-black ">
                                <div class="flex item-center justify-center">
                                    {{--                                        @can('Update Employee')--}}

                                    {{--                                        @endcan--}}
                                    {{--                                        @can('Delete Employee')--}}
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <form action="{{route('assistance.destroy', $p->id)}}" method="post"
                                              onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
                                            @csrf

                                            @method('delete')
                                            <button type="submit" class="w-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    {{--                                        @endcan--}}
                                </div>
                            </td>
                            {{--                            @endcanany--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
            <br>
            {{ $prison->links() }}
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


            const targetDiv = document.getElementById("filters");
            const btn = document.getElementById("toggle");
            btn.onclick = function () {
                if (targetDiv.style.display !== "none") {
                    targetDiv.style.display = "none";
                } else {
                    targetDiv.style.display = "block";
                }
            };
        </script>
    @endsection

</x-app-layout>
