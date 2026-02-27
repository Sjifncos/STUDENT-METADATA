<div class="step hidden" data-step="5">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        <!-- first person in your immediate family-->
        <div class="relative w-full">
            <label for="firstperson_to_attend_college" class="font-medium">
                Are you the first person in your immediate family to attend College/University?<span class="text-red-500 ml-1">*</span>
            </label>
            <select id="firstperson_to_attend_college" name="firstperson" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <!-- first person in your immediate family to attende the UP-->
        <div class="relative w-full">
            <label for="firstpersonup" class="font-medium">
                Are you the first person in your immediate family to attend the University of the Philippines?<span class="text-red-500 ml-1">*</span>
            </label>
            <select id="firstpersonup" name="firstpersonup" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
         <!-- Income-->
        <div class="relative w-full">
            <label for="annualincome" class="font-medium">
               What income range best describes your household's annual income (before taxes)?<span class="text-red-500 ml-1">*</span>
            </label>
            <select id="annualincome" name="annualincome" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="below250k">Below ₱250,000</option>
                <option value="250-499k">₱250,000 - ₱499,999</option>
                <option value="500-749k">₱500,000 - ₱749,999</option> 
                <option value="750-999k">₱750,000 - ₱999,999</option> 
                <option value="1m-1.49m">₱1,000,000 - ₱1,499,999</option>
                <option value="1.5m-1.9m">₱1,500,000 - ₱1,999,999</option>
                <option value="1.9m-2.9m">₱2,000,000 - ₱2,999,999</option>
                <option value="3m">₱3,000,000 or higher</option> 
                <option value="idk">I don't know</option> 
                <option value="prefernottosay">Prefer not to say</option> 
            </select>
        </div>
         <!-- PWD-->
        <div class="relative w-full">
            <label for="pwd" class="font-medium">
               Do you identify as a Person With Disability (PWD), as defined under 
               <span class="font-semibold text-[#850038]">RA 7277</span> and <span class="font-semibold text-[#850038]">RA 9442</span>?
               <span class="text-red-500 ml-1">*</span>
            </label>
            <select id="pwd" name="pwd" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="prefernottosay">Prefer not to say</option> 
            </select>
        </div>
        <div id="pwd-types" class="max-w-md space-y-3">
        <div class="relative w-full">
            <div class="max-w-md space-y-3">
        <p class="font-medium">
            Please indicate the type(s) of disability <br> (select all that apply)
            <span class="text-red-500">*</span>
        </p>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Visual disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Hearing disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Speech or language impairment</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Physical disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Orthopedic disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Learning disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Intellectual disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Autism spectrum disorder</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Psychosocial disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Mental disability</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Cancer (PWD-recognized)</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Rare disease</span>
        </label>
    </div>
        </div>
        </div>
        <div id="pwd-details">
        <div class="relative w-full">
        <div class="max-w-xl border rounded-[14px] p-4 text-sm space-y-2">
        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Visual disability
          </summary>
          <p class="mt-1 ml-4">
            Difficulty seeing or visual impairment that significantly affects daily activities, even with correction.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Hearing disability
          </summary>
          <p class="mt-1 ml-4">
            Partial or total difficulty hearing that affects communication or daily functioning.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Speech or language impairment
          </summary>
          <p class="mt-1 ml-4">
            Difficulty speaking, understanding speech, or using language to communicate effectively.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Physical disability
          </summary>
          <p class="mt-1 ml-4">
            Difficulty in movement or bodily function due to muscle, nerve, or neurological conditions.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Orthopedic disability
          </summary>
          <p class="mt-1 ml-4">
            Difficulty in movement due to conditions affecting bones, joints, limbs, or the skeletal system.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Learning disability
          </summary>
          <p class="mt-1 ml-4">
            Difficulty in learning specific skills such as reading, writing, or mathematics, despite average intelligence.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Intellectual disability
          </summary>
          <p class="mt-1 ml-4">
            Significant limitations in intellectual functioning and everyday adaptive skills, beginning before adulthood.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Autism spectrum disorder
          </summary>
          <p class="mt-1 ml-4">
            A developmental condition affecting communication, social interaction, and behavior, with varying levels of support needs.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Psychosocial disability
          </summary>
          <p class="mt-1 ml-4">
            Conditions that affect mood, thinking, behavior, or social interaction and result in significant functional limitations.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Mental disability
          </summary>
          <p class="mt-1 ml-4">
            Conditions that substantially affect cognitive or emotional functioning and daily living, as recognized under Philippine law.
          </p>
        </details>

        <details>
          <summary class="cursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Cancer (PWD-recognized)
          </summary>
          <p class="mt-1 ml-4">
            Cancer that results in significant functional limitations or long-term effects impacting daily activities.
          </p>
        </details>

        <details>
          <summary class="ccursor-pointer font-black-500 transition-colors duration-200
           hover:text-[#850038] group-open:text-[#850038]">
            Rare disease
          </summary>
          <p class=" mt-1 ml-4">
            A medically recognized rare condition that results in significant functional limitations.
          </p>
        </details>
        <p class="text-[12px] text-gray-500 mt-1 text-center">Please Click the Text to Show Information</p>
      </div>
        </div>
        </div>
         <div class="relative w-full">
            <div class="max-w-md space-y-3">
        <p class="font-medium">
            Do you have any access, learning, or health-related support needs the University should be aware of? Select all that apply.
            <span class="text-red-500">*</span>
        </p>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Academic or learning accommodations</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Health-related or temporary condition</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Mobility or physical access support</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Communication or language support</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Assistive technology or learning tools</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox"  id="support-none" class="h-4 w-4">
            <span>Other (Please Specify)</span>
        </label>
      <label class="flex items-center space-x-2">
          <input type="checkbox" class="h-4 w-4">
          <span>None</span>
      </label>

        </div>
        <div id="support-specify-wrapper" class="relative w-full mt-2 hidden">
          <input id="support-specify" type="text"
              class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300
                    rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
          <label for="support-specify"
              class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500
                    pointer-events-none transition-all duration-150
                    peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                    peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
              Please specify your needs:
          </label>
      </div>

        
         </div>
         <div class="relative w-full">
            <div class="relative w-full">
            <label for="ipra" class="font-medium">
               Do you identify as a member of an Indigenous Peoples (IP) community, as defined under the Indigenous Peoples’ 
               Rights Act <span class=" font-semibold  text-[#850038] ml-1">(IPRA)</span>?<span class="text-red-500 ml-1">*</span>
            </label>
            <select id="ipra" name="ipra" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
                <option value="unsure">Unsure</option> 
            </select>
            <!-- IPRA-related fields (wrapped for show/hide) -->
        <div id="ipra-fields">
            <div class="relative w-full mt-6">
                <label class="font-medium">
                    Indigenous Peoples group:<span class="text-red-500 ml-1">*</span>
                </label>
                <select class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                    <option disabled selected>Please Select</option>
                    <option value="Aeta">Aeta</option>
                    <option value="Agta">Agta</option>
                    <option value="Ati">Ati</option>
                    <option value="Bagobo">Bagobo</option>
                    <option value="Blaan">B’laan</option>
                    <option value="Bontoc">Bontoc</option>
                    <option value="Higaonon">Higaonon</option>
                    <option value="Ibaloi">Ibaloi</option>
                    <option value="Ifugao">Ifugao</option>
                    <option value="Ivatan">Ivatan</option>
                    <option value="Kankanaey">Kankanaey</option>
                    <option value="Maguindanao">Maguindanao</option>
                    <option value="Mandaya">Mandaya</option>
                    <option value="Mangyan">Mangyan</option>
                    <option value="Manobo">Manobo</option>
                    <option value="Maranao">Maranao</option>
                    <option value="Sama-Bajau">Sama-Bajau</option>
                    <option value="Subanen">Subanen</option>
                    <option value="Tboli">T’boli</option>
                    <option value="Tausug">Tausug</option>
                    <option value="Tumandok">Tumandok</option>
                    <option value="Yakan">Yakan</option>
                </select>
            </div>

            <div class="relative w-full mt-6">
                <input required id="ipra_specify" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="ipra_specify"" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
              Please specify your group:
            </label>
            </div>

            <div class="relative w-full mt-6">
                <input required id="indigenous_group" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="indigenous_group" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
              Indigenous Group
            </label>
            </div>  
        </div>
        </div>
    </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const ipraSelect = document.getElementById('ipra');
    const ipraFields = document.getElementById('ipra-fields');

    // Initially hide
    ipraFields.style.display = 'none';

    ipraSelect.addEventListener('change', function () {
        if (this.value === 'yes') {
            ipraFields.style.display = 'block';
        } else {
            ipraFields.style.display = 'none';

            // Clear values when hidden
            ipraFields.querySelectorAll('input, select').forEach(el => el.value = '');
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const pwdSelect = document.getElementById('pwd');
    const disabilityTypes = document.getElementById('pwd-types'); // checkbox container
    const disabilityDetails = document.getElementById('pwd-details'); // details/summary container

    // Initially hide both
    disabilityTypes.style.display = 'none';
    disabilityDetails.style.display = 'none';

    pwdSelect.addEventListener('change', function () {
        if (this.value === 'Yes') {
            disabilityTypes.style.display = 'block';
            disabilityDetails.style.display = 'block';
        } else {
            disabilityTypes.style.display = 'none';
            disabilityDetails.style.display = 'none';

            // Uncheck all checkboxes when hidden
            disabilityTypes.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const noneCheckbox = document.getElementById('support-none');
    const specifyWrapper = document.getElementById('support-specify-wrapper');
    const specifyInput = document.getElementById('support-specify');

    noneCheckbox.addEventListener('change', function () {
        if (this.checked) {
            specifyWrapper.classList.remove('hidden');
            specifyInput.required = true;
        } else {
            specifyWrapper.classList.add('hidden');
            specifyInput.required = false;
            specifyInput.value = '';
        }
    });
});

</script>