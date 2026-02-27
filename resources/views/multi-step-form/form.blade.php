@extends('multi-step-form.body')
    @section('content')
     @include('multi-step-form.header')
    <div class="w-full max-w-2xl lg:max-w-5xl xl:max-w-6xl 
            bg-white rounded-lg rounded-t-none shadow-2xl 
            p-8 md:p-12 
            mx-auto -mt-[1px] 
            mb-8">
        <!-- Progress Bar -->
        @include('multi-step-form.progress')
        <form id="multiStepForm" method="POST">
            @csrf
            {{-- (hidden by default, shown via jQuery) --}}
            {{-- @include('multi-step-form.index') --}}
            {{-- @include('multi-step-form.AccessVerification') --}}
            @include('multi-step-form.step1')
            @include('multi-step-form.step2')
            @include('multi-step-form.step3')
            @include('multi-step-form.step4')
            @include('multi-step-form.step5')
            @include('multi-step-form.step6')

            <!-- Navigation Buttons -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-3 mt-6">
                    
                    <button type="button" id="prevBtn" 
                        class="w-full sm:w-auto px-8 py-3 border-2 border-gray-400 text-black-700 
                            font-semibold rounded hover:bg-gray-50 transition-colors duration-200">
                        Previous
                    </button>

                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-2 w-full sm:w-auto sm:ml-auto">
                        <button type="button" id="nextBtn" 
                            class="w-full sm:w-auto px-8 py-3 bg-[#850038] text-white font-semibold rounded 
                                hover:bg-[#FFAD0D] transition-colors duration-200">
                            Next
                        </button>

                        <button type="submit" id="submitBtn" 
                            class="w-full sm:w-auto px-8 py-3 bg-[#850038] text-white font-semibold rounded 
                                hover:bg-[#FFAD0D] transition-colors duration-200">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Toast Container -->
    <div id="toastContainer" 
        class="fixed top-5 right-5 z-50 flex flex-col space-y-2 w-80">
    </div>
@endsection