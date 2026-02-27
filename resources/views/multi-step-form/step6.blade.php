<div class="step hidden" data-step="6">
    {{--
    <p class="mb-4">Please review your information before submitting.</p>
    <div class="bg-gray-50 p-4 rounded-lg">
        <p class="text-gray-600">All data will be sent securely when you click "Submit".</p>
    </div>
    <!-- You can add a summary of entered data if desired -->
    --}}
     <!-- Main Content -->
        <div class="step-content">
            <!-- Confirmation Checkbox -->
            <div class="mb-6 flex flex-col gap-2">
                <label for="confirmation" class="font-semibold text-black-800 text-sm sm:text-base cursor-pointer">
                    Confirmation
                    <span class="text-red-600">*</span>
                </label>
                <div class="flex items-start gap-4">
                    <input 
                        type="checkbox" 
                        id="confirmation" 
                        class="mt-1 w-5 h-5 accent-[#0E6021] rounded cursor-pointer flex-shrink-0">
                    <label for="confirmation" class="text-black-800 text-sm sm:text-base cursor-pointer leading-relaxed">
                        I confirm that all the information I provided in this form is true and correct.
                    </label>
                </div>
            </div>

            <!-- Data Privacy Checkbox -->
            <div class="mb-6 flex flex-col gap-2">
                <label for="data-privacy" class="font-semibold text-black-800 text-sm sm:text-base cursor-pointer">
                    Data Privacy
                    <span class="text-red-600">*</span>
                </label>
                <div class="flex items-start gap-4">
                    <input 
                        type="checkbox" 
                        id="data-privacy" 
                        class="mt-1 w-5 h-5 accent-[#0E6021] rounded cursor-pointer flex-shrink-0">
                    <label for="data-privacy" class="text-black-800 text-sm sm:text-base cursor-pointer leading-relaxed text-justify">
                        I have read and understood UP’s Privacy Notice. <br> I understand that UP Cebu needs 
                        to process my personal information to manage my student records.
                    </label>
                </div>
                <div class="flex items-start gap-4">
                    <label class="text-black-700 text-sm sm:text-base text-justify mt-4">
                        By indicating my agreement above, I grant my consent to and recognize 
                        the authority of the University to process my personal and sensitive 
                        personal information pursuant to the abovementioned Privacy Notice and other applicable laws.
                    </label>
                </div>
            </div>
        </div>
</div>