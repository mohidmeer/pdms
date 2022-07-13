<div class="-mx-3 md:flex mb-3">




    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="gender">
            gender
        </label>
        <select name="gender" id="gender" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" required="">
            <option value="" selected="">Please Select</option>
            <option value="Male" selected  @if($edit) @if($prisoner->gender == "Male") selected @endif @endif >
                Male
            </option>
            <option value="Female"  @if($edit) @if($prisoner->gender == "Female") selected @endif @endif >
                Female
            </option>
        </select>
    </div>

    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-cnic">
            CNIC/NICOB
        </label>
        <input name="cnic"  @if($edit) value="{{$prisoner->cnic}}" @endif  placeholder="XXXXX-XXXXXXX-X" maxlength="15" class="cnic_mask appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-cnic" type="text">
    </div>

    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-hijri_detention_date">
            hijri detention date
        </label>
        <input name="hijri_detention_date" class="hdate appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
               id="grid-hijri_detention_date" type="text" placeholder="dd-mm-yyyy" value="{{$hijri_detention_date}}" wire:change="hijri_detention_date($event.target.value)"  >

{{--        value="{{$hijri_date}}" onkeydown="return false"  --}}
    </div>

    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-gregorian_detention_date">
            gregorian detention date
        </label>
        <input name="gregorian_detention_date"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
               id="grid-gregorian_detention_date" type="date" readonly  value="{{$gregorian_detention_date}}" onkeydown="return false" >
    </div>


</div>
