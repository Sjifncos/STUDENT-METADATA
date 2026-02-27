<div class="step hidden" data-step="2">
                <!-- Form Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
            <!--Citizenship -->
            <div class="relative w-full">
                <label for="citizenship" class="font-medium">Are you a Philippine citizen?<span class="text-red-500 ml-1">*</span></label> <!-- Do you currently hold Philippine citizenship?--> 
                <select id="citizenship" name="citizenship" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                    <option disabled selected>Please Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
                <!-- Country of Citizenship -->
                <div class="relative w-full">
                    <label for="citizenship_country" class="font-medium">Country of Citizenship <span class="text-red-500 ml-1">*</span></label>
                    <select id="citizenship_country" name="citizenship_country" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                    <option value="" disabled selected>Please Select</option>
                    </select>
                </div>
                <!-- Address outside the Philippines -->
                <div class="col-span-1 md:col-span-2">
                    <h1 class="text-[18px] font-semibold text-[#850038] text-center">Permanent Address Outside the Philippines</h1>
                </div>
                <div class="relative w-full">
                    <div class="relative w-full">
                        <input required id="outside_ph_addressline1" name="outside_ph_addressline1" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                            <label for="outside_ph_addressline1" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                            Address in Home Country <span class="text-red-500 ml-1">*</span>
                            </label>
                    </div>
                        <p class="text-[12px] text-gray-500 mt-1">Street Address</p>
                </div>
                <div class="relative w-full">
                    <div class="relative w-full">
                        <input required id="addressline2" name="addressline2" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                            <label for="outside_ph_addressline2" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                            Streeet Address Line 2
                            </label>
                    </div>
                </div>
                <div class="relative w-full">
                        <input required id="city_foreign" name="city_foreign" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                            <label for="city_foreign" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                            City<span class="text-red-500 ml-1">*</span>
                            </label>
                </div>
                <div class="relative w-full">
                    <input required id="state/province_foreign" name="state/province_foreign" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                        <label for="state/province_foreign" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                        State/Province<span class="text-red-500 ml-1">*</span>
                        </label>
                </div>
                <div class="relative w-full mt-8">
                    <div class="relative w-full">
                    <input required id="zipcode_foreign" name="zipcode_foreign" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                        <label for="zipcode_foreign" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                        Postal/Zip Code<span class="text-red-500 ml-1">*</span>
                        </label>
                </div>
                <span class="error-message text-red-500 text-sm hidden" data-for="zipcode_foreign"></span>
                </div>
                <!-- Country -->
                <div class="relative w-full">
                    <label for="foreign_country" class="font-medium">Country<span class="text-red-500 ml-1">*</span></label>
                    <select id="foreign_country" name="foreign_country" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                        <option disabled selected>Please Select</option>
                    </select>
                </div>
            <!-- Address inside the Philippines -->
            <div class="col-span-1 md:col-span-2">
                <h1 class="text-[18px] font-semibold text-[#850038] text-center">Permanent Address Inside the Philippines</h1>
            </div> 
                <div class="md:col-span-1 flex flex-col w-full">
                    <label for="streetaddressline1_ph" class="font-medium">
                        Street Address (Line 1) <br> DO NOT INCLUDE BARANGAY, CITY, PROVINCE OR REGION
                    </label>
                    <input required id="streetaddressline1_ph" name="streetaddressline1_ph" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors mt-2"/>
                    <p class="text-[12px] text-gray-500 mt-1">House/Building Number and Street Name (e.g., 123 Rizal Street)</p>
                    <span class="error-message text-red-500 text-sm hidden" data-for="streetaddressline1_ph"></span>
                </div>
                <div class="md:col-span-1 flex flex-col w-full">
                    <label for="streetaddressline2_ph" class="font-medium">
                        Street Address (Line 2) <br> DO NOT INCLUDE BARANGAY, CITY, PROVINCE OR REGION
                    </label>
                    <input required id="streetaddressline2_ph" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors mt-2"/>
                    <p class="text-[12px] text-gray-500 mt-1">Subdivision/Village, Building Name, Floor, or Unit (leave blank if none)</p>
                    <span class="error-message text-red-500 text-sm hidden" data-for="streetaddressline2_ph"></span>
                </div>
                <!-- Region -->
                <div class="relative w-full">
                    <label for="region" class="font-medium">Region<span class="text-red-500 ml-1">*</span></label>
                    <select id="region" name="region" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                        <option value="" disabled selected>Loading regions...</option>
                    </select>
                </div>

                <!-- Province -->
                <div class="relative w-full">
                    <label for="province" class="font-medium">Province<span class="text-red-500 ml-1">*</span></label>
                    <select id="province" name="province" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                        <option value="" disabled selected>Please Select</option>
                    </select>
                </div>

                <!-- City/Municipality -->
                <div class="relative w-full">
                    <label for="city" class="font-medium">City/Municipality<span class="text-red-500 ml-1">*</span></label>
                    <select id="city" name="city" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                        <option value="" disabled selected>Please Select</option>
                    </select>
                </div>

                <!-- Barangay -->
                <div class="relative w-full">
                    <label for="barangay" class="font-medium">Barangay<span class="text-red-500 ml-1">*</span></label>
                    <select id="barangay" name="barangay" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                        <option value="" disabled selected>Please Select</option>
                    </select>
                </div>
                <div class="relative w-full">
                        <label for="PSGC" class="font-medium">
                        PSGC Code
                    </label>
                    <input required id="PSGC" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors mt-2"/>
                    <p class="text-[12px] text-gray-500 mt-1">This field will be automatically filled</p>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <h1 class="text-[24px] font-semibold text-[#850038] text-center">Other Contact Details</h1>
                </div>
                <div class="md:col-span-1 flex flex-col w-full">
                    <label for="personalemail" class="font-medium">
                        Personal E-mail
                        <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input required id="personalemail" name="personalemail" type="text" 
                        placeholder="ex: myname@example.com"
                        class="peer w-full px-4 py-3 text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors mt-2"/>
                    <p class="text-[12px] text-gray-500 mt-1">Please enter your personal (non-UP) email address</p>
                    <span class="error-message text-red-500 text-sm hidden" data-for="personalemail"></span>
                </div>
                <div class="md:col-span-1 flex flex-col w-full">
                    <label for="mobilenumber" class="font-medium">
                        Mobile Number
                        <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input required id="mobilenumber" name="mobilenumber" type="text" 
                        placeholder="0000 000 0000"
                        class="peer w-full px-4 py-3 text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors mt-2"/>
                        <p class="text-[12px] text-gray-500 mt-1">ex. 0912 345 6789</p>
                        <span class="error-message text-red-500 text-sm hidden" data-for="mobilenumber"></span>
                </div>
                    <div class="md:col-span-1 flex flex-col w-full">
                    <label for="landlinenumber" class="font-medium">
                        Landline Number 
                    </label>
                    <input required id="landlinenumber" type="text" 
                        placeholder="(032) 000 0000"
                        class="peer w-full px-4 py-3 text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors mt-2"/>
                    <p class="text-[12px] text-gray-500 mt-1">ex. (032) 345 6789</p>
                </div>
            </div>
</div> 
<script>
document.addEventListener('DOMContentLoaded', function () {
    async function populateCountries(selectId) {
        const select = document.getElementById(selectId);
        try {
            const response = await fetch('/api/countries');
            if (!response.ok) throw new Error('Network response was not ok');
            const countries = await response.json();

            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country.code;
                option.textContent = country.name;
                select.appendChild(option);
            });
        } catch (error) {
            console.error('Error fetching countries:', error);
        }
    }
    populateCountries('citizenship_country');
    populateCountries('foreign_country');
});
    document.addEventListener('DOMContentLoaded', function () {

    const regionSelect = document.getElementById('region');
    const provinceSelect = document.getElementById('province');
    const citySelect = document.getElementById('city');
    const barangaySelect = document.getElementById('barangay');
    const psgcInput = document.getElementById('PSGC');

    const BASE_URL = "https://psgc.cloud/api";

    function resetDropdown(select, placeholder = "Please Select") {
        select.innerHTML = `<option value="" disabled selected>${placeholder}</option>`;
    }

    async function fetchData(url) {
        const response = await fetch(url);
        if (!response.ok) throw new Error("Failed to fetch");
        return await response.json();
    }

    function populateDropdown(select, data) {
        data.forEach(item => {
            const option = document.createElement("option");
            option.value = item.code;
            option.textContent = item.name;
            select.appendChild(option);
        });
    }

    // Regions
    async function loadRegions() {
        resetDropdown(regionSelect, "Loading regions...");
        const regions = await fetchData(`${BASE_URL}/regions`);
        resetDropdown(regionSelect);
        populateDropdown(regionSelect, regions);
    }

    // Region → Provinces
    regionSelect.addEventListener("change", async function () {
        resetDropdown(provinceSelect);
        resetDropdown(citySelect);
        resetDropdown(barangaySelect);
        psgcInput.value = "";

        const provinces = await fetchData(`${BASE_URL}/regions/${this.value}/provinces`);
        populateDropdown(provinceSelect, provinces);
    });

    // Province → Cities
    provinceSelect.addEventListener("change", async function () {
        resetDropdown(citySelect);
        resetDropdown(barangaySelect);
        psgcInput.value = "";

        const cities = await fetchData(`${BASE_URL}/provinces/${this.value}/cities-municipalities`);
        populateDropdown(citySelect, cities);
    });

    // City → Barangays
    citySelect.addEventListener("change", async function () {
        resetDropdown(barangaySelect);
        psgcInput.value = "";

        const barangays = await fetchData(`${BASE_URL}/cities-municipalities/${this.value}/barangays`);
        populateDropdown(barangaySelect, barangays);
    });

    // Auto Fill PSGC Code when Barangay selected
    barangaySelect.addEventListener("change", function () {
        psgcInput.value = this.value;
    });
    loadRegions();

});

</script>