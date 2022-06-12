<div class="-mx-3 md:flex mb-3">

    <div class="md:w-1/4 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-iqama_no">
            iqama no
        </label>
        <input name="iqama_no"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-iqama_no" type="text">
    </div>

    <div class="md:w-1/4 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-passport_no">
            passport no
        </label>
        <input name="passport_no" placeholder="AB123456789" class=" appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
               id="grid-passport_no" type="text">
    </div>
    <div class="md:w-1/4 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-gregorian_detention_date">
            gregorian detention date
        </label>
        <input name="gregorian_detention_date" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
               id="grid-gregorian_detention_date" type="date" value="{{$gregorian_detention_date}}" wire:change="gregorian_detention_date($event.target.value)" onkeydown="return false" >
    </div>

    <div class="md:w-1/4 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-hijri_detention_date">
            hijri detention date
        </label>
        <input name="hijri_detention_date" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
               id="grid-hijri_detention_date" type="text" value="{{$hijri_date}}"  readonly>
    </div>
</div>
