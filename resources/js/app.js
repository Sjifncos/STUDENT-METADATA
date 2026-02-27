tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                palatino: ['Palatino', 'Palatino Linotype', 'serif'],
                poppins: ['Poppins','sans-serif'],
                                                
            },
        },
    },
};

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let currentStep = 1;
    let maxStepReached = 1; // track real progress
    const totalSteps = 6;

    // --- Track active toast messages to avoid duplicates ---
    const activeToastMessages = new Set();

    // --- Improved Toast functions ---
    function showToast(message, type = 'error') {
        // If this exact message is already shown, do nothing
        if (activeToastMessages.has(message)) {
            return;
        }

        const toastId = 'toast-' + Date.now() + '-' + Math.random().toString(36).substr(2, 9);
        const bgColor = type === 'success' ? 'bg-green-500' : 'bg-[#FF3131]';
        const icon = type === 'success' 
            ? '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>'
            : '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';

        const toastHtml = `
            <div id="${toastId}" class="flex items-center justify-between ${bgColor} text-white px-4 py-3 rounded-lg shadow-lg transform transition-all duration-300 translate-x-0 opacity-100">
                <div class="flex items-center space-x-2">
                    ${icon}
                    <span class="text-sm font-medium">${message}</span>
                </div>
                <button class="ml-4 text-white hover:text-gray-200 focus:outline-none close-toast-btn" data-toast-id="${toastId}">
                    <svg fill="#ffffff" width="18px" height="18px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                        <path d="M128,20.00012a108,108,0,1,0,108,108A108.12217,108.12217,0,0,0,128,20.00012Zm0,192a84,84,0,1,1,84-84A84.0953,84.0953,0,0,1,128,212.00012Zm40.48535-107.51465L144.9707,128.00012l23.51465,23.51465a12.0001,12.0001,0,0,1-16.9707,16.9707L128,144.97082l-23.51465,23.51465a12.0001,12.0001,0,0,1-16.9707-16.9707l23.51465-23.51465L87.51465,104.48547a12.0001,12.0001,0,0,1,16.9707-16.9707L128,111.02942l23.51465-23.51465a12.0001,12.0001,0,0,1,16.9707,16.9707Z"/>
                    </svg>
                </button>
            </div>
        `;

        $('#toastContainer').append(toastHtml);

        const $toast = $(`#${toastId}`);
        // Store the message on the element to remove it from the Set when closed
        $toast.data('message', message);
        // Add message to active set
        activeToastMessages.add(message);

        // Set auto-remove timer
        const timeoutId = setTimeout(() => {
            closeToast(toastId);
        }, 3000);

        // Store timeout ID on the toast element for later clearing
        $toast.data('timeoutId', timeoutId);
    }

    // Close toast function
    window.closeToast = function(id) {
        const $toast = $(`#${id}`);
        if (!$toast.length) return;

        // Remove message from active set
        const message = $toast.data('message');
        if (message) {
            activeToastMessages.delete(message);
        }

        // Clear the auto-remove timeout if it hasn't fired yet
        const timeoutId = $toast.data('timeoutId');
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        $toast.fadeOut(300, function() {
            $(this).remove();
        });
    };

    // Attach close event using event delegation for dynamically created buttons
    $(document).on('click', '.close-toast-btn', function() {
        const toastId = $(this).data('toast-id');
        closeToast(toastId);
    });

    // Show step
    function showStep(step) {
    $('.step').addClass('hidden');
    $(`.step[data-step="${step}"]`).removeClass('hidden');

    // Track maximum step reached
    if (step > maxStepReached) {
        maxStepReached = step;
    }

    // ----- UPDATE STEP LABEL STYLES -----
    $('.step-label')
        .removeClass('text-[#850038] border-b-2 border-[#850038]')
        .addClass('text-slate-400');

    $(`.step-label[data-step="${step}"]`)
        .removeClass('text-slate-400')
        .addClass('text-[#850038] border-b-2 border-[#850038]');

    // ----- TRUE COMPLETED COUNT -----
    let completed = maxStepReached - 1;
    $('#stepCounter').text(`Step Completed ${completed} / ${totalSteps}`);

    // ----- BUTTON VISIBILITY -----
    $('#prevBtn').toggle(step !== 1);

    if (step === totalSteps) {
        $('#nextBtn').hide();
        $('#submitBtn').removeClass('hidden');
    } else {
        $('#nextBtn').show();
        $('#submitBtn').addClass('hidden');
    }
}

   function validateStep(step) {
    let errors = [];
    const $step = $(`.step[data-step="${step}"]`);

    // Remove old red borders
    $step.find('input, select, textarea').removeClass('border-red-500');

    const requiredFields = [
        // Basic Information
        //'degreeprogram',
        'first_name',
        'last_name',
        //'name_suffix',
        'dob',
        'sexatbirth',
        'birthplace',
        'civilstatus',
        // End of Basic Information

        // Contact Details
        'citizenship',
        'citizenship_country',
        'outside_ph_addressline1',
        'outside_ph_addressline2',
        'citty_foreign',
        'state/province_foreign',
        'zipcode_foreign',
        'foreign_country',
        'streetaddressline1_ph',
        'streetaddressline2_ph',
        'region',
        'province',
        'city/municapality',
        'barangay',
        'PSGC',
        'personalemail',
        'mobilenumber',
        'landlinenumber',
        // End of Contact Details

        // Academic Matters
        'seniorhighschoolattended',
        'locationofhighschool',
        'honorsreceived',
        'scholarship',
        'specifyscholarship',
        // End of Academic Matters

        //Education and Employment


        // End of Education and Employment

        //Other Info
        'firstperson_to_attend_college',
        'firstpersonup',
        'annualincome',
        'pwd',


        'support-specify',
        'ipra',
        'ipra-field',
        'ipra_specify',
        'indigenous_group',
        //End of Other Info



        'address',
        'city',
        'zip',
        'phone',
        'emergency_contact',
        'username',
        'password',
        'password_confirmation',
        'email'
    ];

    // Validate all visible fields in this step
    $step.find('input:not([type="radio"]), select, textarea').each(function () {
        const $field = $(this);
        const fieldName = $field.attr('name');
        let value = $field.val();

        if (typeof value === 'string') {
            value = value.trim();
        }

        const label =
            $field.closest('.mb-4, .relative, .flex-col')
                .find('label')
                .first()
                .text()
                .replace('*', '')
                .trim() || fieldName;

        // REQUIRED FIELD CHECK
        if (requiredFields.includes(fieldName) && !value) {
            errors.push(`${label} is required.`);
            $field.addClass('border-red-500');
        }

        // EMAIL FORMAT
        if (fieldName === 'email' && value) {
            const emailPattern = /^\S+@\S+\.\S+$/;
            if (!emailPattern.test(value)) {
                errors.push(`Please enter a valid email address.`);
                $field.addClass('border-red-500');
            }
        }

        // PASSWORD MATCH
        if (fieldName === 'password_confirmation' && value) {
            if (value !== $('#password').val()) {
                errors.push(`Passwords do not match.`);
                $field.addClass('border-red-500');
            }
        }

        // ZIP CODE (4 digits)
        if (fieldName === 'zip' && value) {
            if (!/^\d{4}$/.test(value)) {
                errors.push(`ZIP Code must be 4 digits only.`);
                $field.addClass('border-red-500');
            }
        }

        // PHONE VALIDATION
        if (fieldName === 'phone' && value) {
            if (!/^[\d\s\-+()]{11,}$/.test(value)) {
                errors.push(`Phone number is invalid.`);
                $field.addClass('border-red-500');
            }
        }

        // MARRIAGE DATE CONDITION
        if (fieldName === 'marriagedate' && $('#civilstatus').val() === 'married') {
            if (!value) {
                errors.push(`Marriage Date is required when Married is selected.`);
                $field.addClass('border-red-500');
            }
        }
    });

    // RADIO BUTTON VALIDATION
    if ($('#civilstatus').val() === 'married' && $('#marriagesection').is(':visible')) {
        const $nameFormatRadios = $('input[name="name_format"]:visible');
        if ($nameFormatRadios.length > 0 && !$('input[name="name_format"]:checked').length) {
            errors.push(`Please select a preferred name format.`);
            $nameFormatRadios.first().closest('.space-y-3').addClass('border-red-500');
        }
    }

    return errors;
}


    // Remove red border as soon as the user types/changes a field
    $(document).on('input change', '.step input, .step select, .step textarea', function() {
        $(this).removeClass('border-red-500');
    });

    // Next button
    $('#nextBtn').click(function() {
        const errors = validateStep(currentStep);
        if (errors.length === 0) {
            currentStep++;
            showStep(currentStep);
        } else {
            showToast('Please fill all the required fields.', 'error');
        }
    });

    // Previous button
    $('#prevBtn').click(function() {
        currentStep--;
        showStep(currentStep);
    });

    // Click step labels
    $('.step-label').click(function () {
        const targetStep = parseInt($(this).data('step'));

        // Optional: validate before allowing forward jump
        if (targetStep > currentStep) {
            const errors = validateStep(currentStep);
            if (errors.length > 0) {
                showToast('Please fill all the required fields.', 'error');
                return;
            }
        }

        currentStep = targetStep;
        showStep(currentStep);
    });

    // Form submission via AJAX
    $('#multiStepForm').submit(function(e) {
        e.preventDefault();

        // Validate last step
        const errors = validateStep(currentStep);
            if (errors.length > 0) {
                showToast('Please fill all the required fields.', 'error');
                return;
            }

        let formData = $(this).serialize();

        $.ajax({
            url: '{{ route("form.submit") }}',
            type: 'POST',
            data: formData,
            success: function(response) {
                showToast(response.message, 'success');
                // Optionally reset form or redirect
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;
                // Collect all error messages
                let errorMessages = [];
                $.each(errors, function(key, value) {
                    errorMessages.push(value[0]);
                });
                // Remove duplicates from server errors as well
                const uniqueErrorMessages = [...new Set(errorMessages)];
                uniqueErrorMessages.forEach(msg => showToast(msg, 'error'));
            }
        });
    });

    // Initialise
    showStep(currentStep);
});


