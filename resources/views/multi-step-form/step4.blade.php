<div class="step hidden" data-step="4">
    {{-- 
    <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="newsletter">Subscribe to newsletter?</label>
        <select id="newsletter" name="newsletter" class="w-full px-4 py-2 border rounded-lg">
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <span class="error-message text-red-500 text-sm hidden" data-for="newsletter"></span>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="interests">Interests (optional)</label>
        <textarea id="interests" name="interests" rows="3" class="w-full px-4 py-2 border rounded-lg"></textarea>
    </div>
    --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        <!-- Highest Educational Attainment -->
       <div class="relative w-full">
            <label for="educationalattainment" class="font-medium">What is your highest educational attainment? <span class="text-red-500 ml-1">*</span></label>
            <select id="educationalattainment" name="educationalattainment" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="bachelorsdegree">Bachelor’s degree</option>
                <option value="postbaccalaureate">Post-baccalaureate diploma / certificate</option>
                <option value="mastersdegree">Master’s degree</option>
                <option value="postmasters">Post-master’s diploma / certificate</option>
                <option value="doctoral">Doctoral degree (PhD, EdD, DBA, etc.)</option>
            </select>
        </div>
        <div class="relative w-full">
            <!-- Undergraduate Degree -->
        <div class="relative w-full mt-8">
            <input required id="undergraddegree" name="undergraddegree" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="undergraddegree" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                What is your undergraduate degree?<span class="text-red-500 ml-1">*</span>
            </label>
        </div>
        </div>
        <div class="relative w-full">
            <label for="listofdegree" class="font-medium">
               Please list any degrees, diplomas, or certificates you have completed after earning your bachelor’s degree.<span class="text-red-500 ml-1">*</span>
            </label>
             <input required id="listofdegree" name="listofdegree" type="text" 
            class="peer w-full px-4 py-3 text-base bg-white outline-none
                    border-2 border-gray-300 rounded-md
                    focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                    transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">Separate multiple entries with a comma.</p>
        </div>
        <div class="relative w-full">
            <div class="relative w-full mt-14">
                <input required id="lastschoolattended" name="lastschoolattended" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="lastschoolattended" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    What was the last school you attended?<span class="text-red-500 ml-1">*</span>
                </label>
            </div>
        </div>
             <!-- Primary Source Income -->
       <div class="relative w-full">
            <label for="typeofincome" class="font-medium">Primary Source of Income <span class="text-red-500 ml-1">*</span></label>
            <select id="typeofincome" name="typeofincome" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="employeed">Employed (salary from an employer)</option>
                <option value="self-employeed">Self-employed / Freelance / Professional practice</option>
                <option value="combination">Combination of employment and self-employment</option>
                <option value="passiveincome">Passive income (e.g., investments, rental, family trust)</option>
                <option value="notearning">Not currently earning income</option>
            </select>
            <p class="text-[12px] text-gray-500 mt-1">Please select the option that represents your main source of income, even if you have multiple sources.</p>
        </div>
        <div class="relative w-full">
            <div class="relative w-full mt-7">
                <input required id="nameofemployer" name="nameofemployer" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="nameofemployer" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Name of Employer<span class="text-red-500 ml-1">*</span>
                </label>
            </div>
        </div>

        <div class="relative w-full mt-7">
                <input required id="natureofwork" name="natureofwork" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="natureofwork" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Nature of Work or Profession<span class="text-red-500 ml-1">*</span>
                </label>
        </div>
        <div class="relative w-full mt-[-2]"> 
             <div class="relative w-full">
            <label for="income" class="font-medium">Monthly Gross Earnings (before taxes) <span class="text-red-500 ml-1">*</span></label>
            <select id="income" name="income" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="below20k">Below ₱20,000</option>
                <option value="20k-39k">₱20,000 - ₱39,999</option>
                <option value="40k-59k">₱40,000 - ₱59,999</option>
                <option value="60k-79k">₱60,000 - ₱79,999</option>
                <option value="80k-99k">₱80,000 - ₱99,999</option>
                <option value="100k-149k">₱100,000 - ₱149,999</option>
                <option value="150kup">₱150,000 or higher</option>
            </select>
        </div>
        </div>
    <div class="col-span-1 md:col-span-2">
        <p class="font-medium">
            Primary Source(s) of Funding for Your Graduate Studies<br> (select all that apply)
            <span class="text-red-500">*</span>
        </p>
        </div>
        <div class="relative w-full space-y-3">
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Personal income from employment or self-employment</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Savings / personal funds</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Family support</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>UP scholarship or fellowship</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Government scholarship (non-UP)</span>
        </label>
    </div>
    <div class="relative w-full space-y-3">
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Private scholarship or fellowship</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Graduate assistantship</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Employer sponsorship / study leave with pay</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Educational loan</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Passive income</span>
        </label>
    </div>
    <div class="relative w-full">
        <label class="flex items-center space-x-2 -mt-4">
            <input type="checkbox" id="funding-other" class="h-4 w-4">
            <span>Other (Please Specify)</span>
        </label>
    </div>
   <div id="funding-other-wrapper" class="col-span-1 md:col-span-2 hidden">
        <div class="relative w-full">
            <input id="funding-other-input" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2
                    border-gray-300 rounded-md focus:border-[#0E6021]
                    focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="funding-other-input"
                class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm
                    text-gray-500 pointer-events-none transition-all duration-150
                    peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                    peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Please Specify.<span class="text-red-500 ml-1">*</span>
            </label>
        </div>
    </div>
</div> 
</div>