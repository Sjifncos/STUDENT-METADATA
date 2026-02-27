<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class FormController extends Controller
    {
        public function submit(Request $request)
        {
            $validated = $request->validate([

            // Access Verification
            'UP_student_number' =>'required|string|max:255', // needs validation

            //Access Verification Next Step
            'UPM' =>'required|string|max:255',
            'category' => 'required|string|max:255',
            'upid' => 'required|string|max:255', // UP email address needs a match in record

            // Step 1 fields Basic Information
            //'degreeprogram' => 'required|string|max:255',
            'first_name'    => 'required|string|max:255',
            'middle_name'   => 'nullable|string|max:255',     
            'last_name'     => 'required|string|max:255',
            'name_suffix'   => 'nullable|string|max:255',      
            'dob'           => 'required|date',
            'sexatbirth'    => 'required|in:male,female',
            'birthplace'    => 'required|string|max:255',
            'civilstatus'   => 'required|in:single,married,separated,annuled,widowed,livin,noans',
            'marriagedate'  => 'required_if:civilstatus,married|date|nullable',
            'name_format'   => 'required_if:civilstatus,married|in:maiden,hyphenated,husband|nullable',

            // Step 2 fields Contact Details
            'citizenship' => 'required|in:yes,no',
            'citizenship_country' => 'required|string|size:255',
            'outside_ph_addressline1'=> 'required|string|max:255',
            'outside_ph_addressline2' => 'nullable|string|max:255',
            'citty_foreign' => 'required|string|max:255',
            'state/province_foreign' => 'required|string|max:255',
            'zipcode_foreign' =>'required|string|max:255',
            'foreign_country' => 'required|string|size:255',
            'streetaddressline1_ph' => 'required|string|max:255',
            'streetaddressline2_ph' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city/municapality' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'PSGC' => 'required|string|max:255',
            'personalemail' => 'required|string|max:255',
            'mobilenumber' => 'requied|string|max:255',
            'landlinenumber' => 'nullable|string|max:255',
            
            // Step 3 fields
            'seniorhighschoolattended' => 'required|string|max:255',
            'locationofhighschool' => 'required|string|max:255',
            'honorsreceived' => 'required|in:honor,highhonor,highesthonor',
            'scholarship' => 'required|in:yes,no',
            'specifyscholarship' => 'required_if:scholarship,yes|nullable',

    
            // Step 4 fields
            'newsletter'    => 'nullable|in:yes,no',
            'interests'     => 'nullable|string',

            'educationalattainment' => 'required|in:bachelorsdegree,postbaccalaureate,mastersdegree,postmasters,doctoral',
            'undergraddegree' => 'required|string|max:255',
            'listofdegree' => 'nullable|string|max:255',
            'lastschoolattended' => 'required|string|max:255',
            'typeofincome' => 'required|in:employeed,self-employeed,combination,passiveincome,notearning',
            'nameofemployer' => 'nullable|string|max:255',
            'natureofwork' => 'nullable|string|max:255',
            'income' => 'required|in:below20k,20k-39k,40k-59k,60k-79k,80k-99k,100k-149k,150kup',



            // Step 5 fields
            'username'      => 'required|string|max:255|unique:users,username',
            'password'      => 'required|string|min:8|confirmed',

            'firstperson_to_attend_college' => 'required|string|max:255',
            'firstpersonup' => 'required|in:yes,no',
            'annualincome' => 'required|in:below250k,250-499k,500-749k,750-999k,1m-1.49m,1.5m-1.9m,1.9m-2.9m,3m,idk,prefernottosay',
            'pwd' => 'required|in:yes,no',


            'support-specify' => 'required|string|max:255',
            'ipra' => 'requireed|in:yes,no,unsure',
            'ipra-field' => 'required|in:Aeta,Agta,Ati,Bagobo,Blaan,Bontoc,Higaonon,Ibaloi,Ifugao,Ivatan,Kankanaey,Maguindanao,Mandaya,Mangyan,Manobo,Maranao,Sama-Bajau,Subanen,Tboli,Tausug,Tumandok,Yakan',
            'ipra_specify' => 'required|string|max:255',
            'indigenous_group' => 'required|string|max:255',


            // STEP 6 UNDERTAKINGS
    
            // (Optional email field – add if present in your form)
            'email'         => 'sometimes|required|email|max:255',
            ]);

            // Process the data (e.g., create user, send email, etc.)
            // ...

            return response()->json(['message' => 'Form submitted successfully!'], 200);
        }
    }