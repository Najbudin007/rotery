@extends('admin.layouts.master')
@section('content')
    <div class="p-2 bg-white w-100">
        <p>First Name: <span>{{ $detail->first_name }}</span></p>
        <p>Middle Name: <span>{{ $detail->middle_name }}</span></p>
        <p>Family Name: <span>{{ $detail->family_name }}</span></p>
        <p>Email: <span>{{ $detail->email }}</span></p>
        <p>Date Of Birth: <span>{{ $detail->dob }}</span></p>
        <p>Gender: <span>{{ $detail->gender }}</span></p>
        <p>Married: <span>{{ $detail->married }}</span></p>
        @if ($detail->married == 'married')
            <p>Spouse Name: <span>{{ $detail->spouseName }}</span></p>
            <p>Anniversary Date: <span>{{ $detail->anniversaryDate }}</span></p>
            <p>Children Name: <span>{{ $detail->childrenName }}</span></p>
            <p>Date Of Birth Of Children: <span>{{ $detail->dateOfBirthOfChildren }}</span></p>
        @endif
        <p>Former Member: <span>{{ $detail->former_member }}</span></p>
        @if ($detail->former_member == 'yes')
            <p>Membership ID: <span>{{ $detail->riMembershipID }}</span></p>
            <p>Club Name: <span>{{ $detail->clubName }}</span></p>
            <p>Alumnus: <span>{{ $detail->alumnus }}</span></p>
        @endif
        <p>Home Address: <span>{{ $detail->home_address }}</span></p>
        <p>Phone Number: <span>{{ $detail->phone_number }}</span></p>
        <p>Country: <span>{{ $detail->country }}</span></p>
        <p>Postal Code: <span>{{ $detail->postal_code }}</span></p>
        <p>Alternative Phone Number: <span>{{ $detail->alternative_phone_number }}</span></p>
        <p>Mail Address: <span>{{ $detail->mail_address }}</span></p>
        <p>Job Title: <span>{{ $detail->job_title }}</span></p>
        <p>Name of Business or Organization: <span>{{ $detail->res_business }}</span></p>
        <p>Classification: <span>{{ $detail->classification }}</span></p>
        <p>Business Address: <span>{{ $detail->business_address }}</span></p>
        <p>Business Telephone: <span>{{ $detail->business_telephone }}</span></p>
        <p>fax: <span>{{ $detail->fax }}</span></p>
        <p> Business Email: <span>{{ $detail->business_email }}</span></p>
        <p>residence: <span>{{ json_encode($detail->residence) }}</span></p>
        <p>business: <span>{{ json_encode($detail->business) }}</span></p>
        <p>alternate_address: <span>{{ json_encode($detail->alternate_address) }}</span></p>
        <p>others: <span>{{ json_encode($detail->others) }}</span></p>
    </div>
@endsection
