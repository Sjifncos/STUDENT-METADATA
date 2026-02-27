@extends('multi-step-form.body')
@section('content')
@include('multi-step-form.header')
<div class="w-full max-w-2xl bg-white rounded-lg shadow-2xl p-8 md:p-12">

    {{-- Step 1: Access Verification --}}
    <div id="step1">
        <h2 class="font-palatino text-[28px] font-bold text-[#850038] mb-6">
            Access Verification
        </h2>

        <div id="formStep1" class="space-y-6">
            <div>
                <div class="relative w-full">
                    <input
                        required
                        id="studentNumber"
                        type="text"
                        class="peer w-full px-4 py-3 text-base sm:text-base bg-white outline-none
                               border-2 border-gray-300 rounded-md
                               focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                               transition-colors"/>
                    <label
                        for="studentNumber"
                        class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1
                               text-sm sm:text-sm text-gray-500 pointer-events-none
                               transition-all duration-150
                               peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                               peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                        UP Student Number (20xx-xxxxx)
                        <span class="text-red-500 ml-1">*</span>
                    </label>
                </div>
            </div>

            <button 
                type="submit"
                class="w-full sm:w-auto px-8 py-3 bg-[#850038] text-white font-semibold rounded-[24px] 
                       hover:bg-[#FFAD0D] transition-colors duration-200 mt-4">
                Validate
            </button>
        </div>
    </div>

    {{-- Step 2: Additional Information --}}
    <div id="step2" class="hidden">
        <h2 class="font-palatino text-[28px] font-bold text-[#850038] mb-6 text-center">
            Additional Information
        </h2>

        <div id="formStep2" class="space-y-6">
            {{-- UPM Field --}}
            <div class="relative flex w-full">
                <input
                    name="upm"
                    type="text"
                    required
                    class="peer w-full px-5 py-3 text-base bg-white outline-none
                           border-2 border-gray-300 rounded-md
                           focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                           transition-colors"
                />
                <label
                    for="upm"
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-white px-2
                           text-base text-gray-500 pointer-events-none
                           transition-all duration-150
                           peer-focus:top-0 peer-focus:left-3 peer-focus:text-sm peer-focus:text-[#0E6021]
                           peer-valid:top-0 peer-valid:left-3 peer-valid:text-sm peer-valid:text-[#0E6021]">
                    UPM
                    <span class="text-red-500 ml-1">*</span>
                </label>
            </div>

            {{-- Category Field --}}
            <div class="relative flex w-full">
                <input
                    name="category"
                    type="text"
                    required
                    class="peer w-full px-5 py-3 text-base bg-white outline-none
                           border-2 border-gray-300 rounded-md
                           focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                           transition-colors"/>
                <label
                    for="category"
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-white px-2
                           text-base text-gray-500 pointer-events-none
                           transition-all duration-150
                           peer-focus:top-0 peer-focus:left-3 peer-focus:text-sm peer-focus:text-[#0E6021]
                           peer-valid:top-0 peer-valid:left-3 peer-valid:text-sm peer-valid:text-[#0E6021]">
                    Category
                    <span class="text-red-500 ml-1">*</span>
                </label>
            </div>

            {{-- UP Email Field --}}
             <div>
        <div class="w-full">
        <div class="relative">
            <input
                type="text"
                required
                class="peer w-full px-5 py-3 text-base bg-white outline-none
                border-2 border-gray-300 rounded-md
                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                transition-colors"/>
            <label
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-white px-2
                text-base text-gray-500 pointer-events-none
                transition-all duration-150
                peer-focus:top-0 peer-focus:left-3 peer-focus:text-sm peer-focus:text-[#0E6021]
                peer-valid:top-0 peer-valid:left-3 peer-valid:text-sm peer-valid:text-[#0E6021]">
                UP E-mail Address
                <span class="text-red-500 ml-1">*</span>
            </label>
    </div>
      <div class="relative w-full">
                <p class="text-[12px] text-gray-500 mt-1">UPid@up.edu.ph</p>
            </div>
        </div>
    </div>
</div>
