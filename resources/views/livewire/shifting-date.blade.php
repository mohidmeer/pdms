
<div class="-mx-3 md:flex mb-3">
{{--    <div class="md:w-1/2 px-3">--}}
{{--        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="shifting_date_gregorian">--}}
{{--            shifting date gregorian--}}
{{--        </label>--}}
{{--        <input name="shifting_date_gregorian"  onkeydown="return false"   class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-shifting_date_gregorian" type="date">--}}
{{--    </div>--}}

    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="actual_release_date_gregorian">
            actual release date gregorian
        </label>
        <input name="actual_release_date_gregorian" value="{{$gregorian_date}}"  wire:change="gregorian_date($event.target.value)"  onkeydown="return false"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-actual_release_date_gregorian" type="date">
    </div>


    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="actual_release_date_hijri">
            actual release date hijri
        </label>
        <input name="actual_release_date_hijri" type="text" value="{{$hijri_date_conversion}}"  readonly class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-actual_release_date_hijri" >
    </div>

    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-file_attachments">
            Attachments (Scanned PDF, JPG)
        </label>
        @if(!empty($prisoner->attachment))
            <a href="{{Storage::url($prisoner->attachment)}}" target="_blank" class="text-blue-700 hover:underline" >View Existing Attachment</a>
        @endif
        <input name="file_attachments_1" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-file_attachments" type="file">


    </div>

</div>
