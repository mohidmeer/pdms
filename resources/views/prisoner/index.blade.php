<x-app-layout>

    @section('custom_css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Nastaliq+Urdu">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Prisoner') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-max w-full table-auto">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-center">Iqama</th>
                        <th class="py-3 px-6 text-center">Passport</th>
                        <th class="py-3 px-6 text-center">CNIC</th>
                        <th class="py-3 px-6 text-center">Hijri Detention Date</th>
                        <th class="py-3 px-6 text-center">Greg. Detention Date</th>
{{--                        @canany(['Update Employee', 'Delete Employee'])--}}
                            <th class="py-3 px-6 text-center">Actions</th>
{{--                        @endcanany--}}
                    </tr>
                    </thead>
                    <tbody class="text-black text-sm font-light">
                    @foreach($prisoner as $employee)
                        <tr class="border-b border-gray-200 bg-white text-black hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <a href="{{route('prisoner.show', $employee->id)}}" class="flex items-center text-blue-500 hover:underline">
                                    <span>{{$employee->name}}</span>
                                </a>
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->iqama_no}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->passport_no}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->cnic}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->hijri_detention_date}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->gregorian_detention_date}}
                            </td>

{{--                            @canany(['Update Employee', 'Delete Employee'])--}}
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
{{--                                        @can('Update Employee')--}}
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="{{route('prisoner.edit', $employee->id)}}" class="text-blue-500 underline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                    </svg>
                                                </a>
                                            </div>
{{--                                        @endcan--}}
{{--                                        @can('Delete Employee')--}}
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="{{route('prisoner.destroy', $employee->id)}}" method="post" onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
                                                    @csrf

                                                    @method('delete')
                                                    <button type="submit" class="w-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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


{{--                {{ $prisoner->links() }}--}}
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


            $(function() {
                $('#datepicker').keypress(function(event) {
                    event.preventDefault();
                    return false;
                });
            });
        </script>
    @endsection

</x-app-layout>
