@extends('frontend.layouts.master')
@section('content')
    @if (Session::has('success'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{ Session::get('success') }}</p>
        </div>
    @endif
    <div class="max-w-4xl mx-auto p-4 md:p-10 xl:px-14">
        <div class="text-textDark">
            <h1 class="text-primary text-lg md:text-xl lg:text-3xl font-playFair font-700 text-center pb-5">
                Membership Application Form
            </h1>

            <form action="{{ route('memberForm.store') }}" method="POST"
                class="space-y-4 lg:space-y-6 comment-form text-gray-600 text-xs lg:text-sm">
                @csrf
                <!-- Member Personal Details -->
                <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                    <!-- Input Field For First Name -->
                    <div>
                        <label for="firstName" class="pb-2 inline-block font-600">First Name</label>
                        <input type="text" id="firstName" name="first_name"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your First Name" required />
                    </div>

                    <!-- Input Field For Middle Name -->
                    <div>
                        <label for="middleName" class="pb-2 inline-block font-600">Middle Name</label>
                        <input type="text" id="middleName"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" name="middle_name"
                            placeholder="Enter Your Middle Name" required />
                    </div>

                    <!-- Input Field For Family Name -->
                    <div>
                        <label for="familyName" class="pb-2 inline-block font-600">Family Name</label>
                        <input type="text" id="familyName"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" name="family_name"
                            placeholder="Enter Your Family Name" required />
                    </div>

                    <!-- Input Field For Date of Birth -->
                    <div>
                        <label for="dateOfBirth" class="pb-2 inline-block font-600">Date of Birth</label>
                        <input type="date" id="dateOfBirth"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" name="dob" required />
                    </div>

                    <!-- Checkbox for Gender -->
                    <div>
                        <label class="pb-2 inline-block font-600">Gender</label>
                        <div class="flex space-x-4">
                            <div class="space-x-1 flex">
                                <input type="radio" id="gender-male" name="gender" value="male" />
                                <label for="gender-male">Male</label>
                            </div>
                            <div class="space-x-1 flex">
                                <input type="radio" id="gender-female" name="gender" value="female" />
                                <label for="gender-female">Female</label>
                            </div>
                        </div>
                    </div>

                    <!-- Checkbox for Marital Status -->
                    <div>
                        <label class="pb-2 inline-block font-600">Marital Status</label>
                        <div class="flex space-x-4">
                            <div class="space-x-1 flex">
                                <input type="radio" id="married" name="married" onchange="toggleSpouseDetails()"
                                    value="married" />
                                <label for="married">Married</label>
                            </div>
                            <div class="space-x-1 flex">
                                <input type="radio" id="unmarried" name="married" onchange="toggleSpouseDetails()"
                                    value="unmarried" />
                                <label for="unmarried">Unmarried</label>
                            </div>
                        </div>
                    </div>

                    <!-- Input Fields For Married Members -->
                    <div class="sm:col-span-2 hidden sm:grid-cols-2 gap-4 lg:gap-6" id="spouse-details">
                        <!-- Input Field For Spouse Name -->
                        <div>
                            <label for="spouseName" class="pb-2 inline-block font-600">Spouse Name</label>
                            <input type="text" id="spouseName" name="spouseName"
                                class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                placeholder="Enter Your Spouse Name" />
                        </div>

                        <!-- Input Field For Anniversary Date -->
                        <div>
                            <label for="anniversaryDate" class="pb-2 inline-block font-600">Anniversary Date</label>
                            <input type="date" id="anniversaryDate" class="anniversaryDate"
                                class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" />
                        </div>

                        <!-- Input Field For Children Name -->
                        <div>
                            <label for="childrenName" class="pb-2 inline-block font-600">Children Name</label>
                            <input type="text" id="childrenName" name="childrenName"
                                class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                placeholder="Enter Your Children Name" />
                        </div>

                        <!-- Input Field For Date of Birth of Children -->
                        <div>
                            <label for="dateOfBirthOfChildren" class="pb-2 inline-block font-600">Date of Birth</label>
                            <input type="date" id="dateOfBirthOfChildren" name="dateOfBirthOfChildren"
                                class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" />
                        </div>
                    </div>
                </div>

                <!-- Member Professional Details -->
                <div class="space-y-4 lg:space-y-6">
                    <!-- Checkbox for Rotarian Club member of not -->
                    <div>
                        <label class="pb-2 inline-block font-600">Are you a former Rotarian or Current member of another
                            Rotary
                            club?</label>
                        <div class="flex space-x-4">
                            <div class="space-x-1 flex">
                                <input type="radio" id="member" name="former_member" value="yes"
                                    onchange="toggleRotaryMemberDetails()" />
                                <label for="member">Yes</label>
                            </div>
                            <div class="space-x-1 flex">
                                <input type="radio" id="not-member" name="former_member" value="no"
                                    onchange="toggleRotaryMemberDetails()" />
                                <label for="not-member">No</label>
                            </div>
                        </div>
                    </div>

                    <!-- Input Field for Rotarian Member only -->
                    <div class="hidden gap-4 sm:grid-cols-2 lg:gap-6" id="rotary-member-details">
                        <!-- Input Field For RI membership ID -->
                        <div>
                            <label for="riMembershipID" class="pb-2 inline-block font-600">RI membership ID</label>
                            <input type="number" id="riMembershipID" name="riMembershipID"
                                class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                placeholder="Enter Your RI Membership ID" />
                        </div>

                        <!-- Input Field For former / current club -->
                        <div>
                            <label for="club-name" class="pb-2 inline-block font-600">Former/Current Club Name</label>
                            <input type="text" id="club-name" name="clubName"
                                class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                placeholder="Former/Current Club Name" />
                        </div>
                    </div>

                    <!-- Checkbox for Rotary Alumnus/ alumnae -->
                    <div>
                        <label class="pb-2 inline-block font-600">Were you Rotary alumnus/ alumnae?</label>
                        <div class="flex space-x-4">
                            <div class="space-x-1 flex">
                                <input type="radio" id="alumnae" name="alumnus" value="yes" />
                                <label for="alumnae">Yes</label>
                            </div>
                            <div class="space-x-1 flex">
                                <input type="radio" id="not-alumnae" name="alumnus" value="no" />
                                <label for="not-alumnae">No</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member Contact Details and Locations -->
                <div class="grid gap-4 lg:gap-6 sm:grid-cols-2">
                    <!-- Input Field For Email -->
                    <div>
                        <label for="email" class="pb-2 inline-block font-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Email" required />
                    </div>

                    <!-- Input Field For Home Address -->
                    <div>
                        <label for="homeAddress" class="pb-2 inline-block font-600">Home Address</label>
                        <input type="text" id="homeAddress" name="home_address"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Home Address" required />
                    </div>

                    <!-- Input Field For Preferred Phone Number -->
                    <div>
                        <label for="phoneNumber" class="pb-2 inline-block font-600">Preferred Phone Number</label>
                        <input type="number" id="phoneNumber" name="phone_number"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Preferred Phone Number" required />
                    </div>

                    <!-- Input Field For Country -->
                    <div>
                        <label for="country" class="pb-2 inline-block font-600">Country</label>
                        <input type="text" id="country" name="country"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Country" required />
                    </div>

                    <!-- Input Field For Postcode -->
                    <div>
                        <label for="postcode" class="pb-2 inline-block font-600">Postcode</label>
                        <input type="number" id="postcode" name="postal_code"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Postcode" required />
                    </div>

                    <!-- Input Field For Alternate Phone Number -->
                    <div>
                        <label for="phoneNumber" class="pb-2 inline-block font-600">Alternate Phone Number</label>
                        <input type="number" id="phoneNumber" name="alternative_phone_number"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Alternate Phone Number" />
                    </div>
                </div>

                <!-- Mailing Address And Post Office Box -->
                <div class="space-y-4 pt-2">
                    <!-- Input Field For Preferred mailing address -->
                    <div>
                        <label for="preferredMailingAddress" class="pb-2 inline-block font-600">Preferred mailing
                            address</label>
                        <input type="text" id="preferredMailingAddress" name="mail_address"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Preferred mailing address" />
                    </div>

                    <div id="address-container" class="space-y-4 lg:space-y-6">
                        <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label class="pb-2 inline-block font-600">Residence</label>
                                <input type="text" name="residence[]"
                                    class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                    placeholder="Enter Your Residence" />
                            </div>
                            <div>
                                <label class="pb-2 inline-block font-600">Business</label>
                                <input type="text" name="business"
                                    class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                    placeholder="Enter Your Business" />
                            </div>
                            <div>
                                <label class="pb-2 inline-block font-600">Others</label>
                                <input type="text" class="others" name="others"
                                    class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                    placeholder="Others" />
                            </div>
                            <div>
                                <label class="pb-2 inline-block font-600">Alternate Address</label>
                                <input type="text" name="alternate_address"
                                    class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                    placeholder="Enter Your Alternate Address" />
                            </div>
                        </div>
                    </div>

                    <!-- Add Icon -->
                    <div class="flex">
                        <div class="bg-primary rounded flex items-center justify-center cursor-pointer h-8 lg:h-10 px-5 text-white space-x-2"
                            onClick="addMoreFields()">
                            <div>Add More</div>
                            <img src="./resources/images/icons/add.svg" alt="add icon" />
                        </div>
                    </div>
                </div>

                <!-- Job Description -->
                <div class="grid gap-4 lg:gap-6 sm:grid-cols-2">
                    <!-- Input Field For Job Title -->
                    <div>
                        <label for="jobTitle" class="pb-2 inline-block font-600">Job Title</label>
                        <input type="text" id="jobTitle" name="job_title"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Job Title" required />
                    </div>

                    <!-- Input Field For Name of Business or Organization -->
                    <div>
                        <label for="businessName" class="pb-2 inline-block font-600">Name of Business or
                            Organization</label>
                        <input type="text" id="businessName" name="business"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Name of Business or Organization" required />
                    </div>

                    <!-- Input Field For Classification -->
                    <div>
                        <label for="classification" class="pb-2 inline-block font-600">Classification</label>
                        <input type="text" id="classification" name="classification"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Classification" required />
                    </div>

                    <!-- Input Field For Business Address -->
                    <div>
                        <label for="businessAddress" class="pb-2 inline-block font-600">Business Address</label>
                        <input type="text" id="businessAddress" name="business_address"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Business Address" required />
                    </div>

                    <!-- Input Field For Business Telephone -->
                    <div>
                        <label for="businessTelephone" class="pb-2 inline-block font-600">Business Telephone</label>
                        <input type="text" id="businessTelephone" name="business_telephone"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Business Telephone" required />
                    </div>

                    <!-- Input Field For Fax -->
                    <div>
                        <label for="firstName" class="pb-2 inline-block font-600">Fax</label>
                        <input type="text" id="firstName" name="fax"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" placeholder="Enter Fax"
                            required />
                    </div>

                    <!-- Input Field For Business Email -->
                    <div>
                        <label for="businessEmail" class="pb-2 inline-block font-600">Business Email</label>
                        <input type="text" id="businessEmail" name="business_email"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Business Email" required />
                    </div>
                </div>

                <!-- Accept membership -->
                <div>
                    <input type="checkbox" id="terms" required />
                    <label for="terms" class="pl-1">(I hereby certify that if accepted to membership of the Rotary
                        club of Himalayan golfers that I as a Rotarian will exemplify the
                        object of rotary in all my daily contacts and will abide by the
                        constitutional document of rotary international and the club. I
                        agree to pay an admission fee and dues in accordance with the by
                        law of the club)</label>
                </div>

                <div class="pt-2">
                    <button type="submit" class="bg-primary text-white text-sm text-center px-5 h-10 rounded font-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
