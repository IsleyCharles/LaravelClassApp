@extends('websitelayout.app')

@section('content')

<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold text-red-700 mb-4 text-center">Resources</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Career & Professional Development -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-red-700 mb-2">Career & Professional Development</h2>
            <ul class="list-disc list-inside">
                <li><a href="#" class="text-blue-600 hover:underline">Job Listings & Internships</a> – Links to job portals, exclusive alumni job postings.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Resume & Cover Letter Templates</a> – Downloadable samples for job applications.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Interview Preparation</a> – Tips, common questions, mock interview resources.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Networking Opportunities</a> – LinkedIn groups, industry meetups, networking events.</li>
            </ul>
        </div>

        <!-- Academic & Learning Resources -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-red-700 mb-2">Academic & Learning Resources</h2>
            <ul class="list-disc list-inside">
                <li><a href="#" class="text-blue-600 hover:underline">Online Courses & Certifications</a> – Links to free/discounted courses (Coursera, Udemy, etc.).</li>
                <li><a href="#" class="text-blue-600 hover:underline">Research & Publications</a> – Access to university research, journals, and publications.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Alumni Guest Lectures & Webinars</a> – Videos or live sessions from experienced alumni.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Library Access</a> – Digital archives, e-books, thesis papers.</li>
            </ul>
        </div>

        <!-- Alumni Community & Engagement -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-red-700 mb-2">Alumni Community & Engagement</h2>
            <ul class="list-disc list-inside">
                <li><a href="#" class="text-blue-600 hover:underline">Mentorship Programs</a> – Connect alumni with students and younger graduates.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Volunteer & Giving Opportunities</a> – Ways to contribute to the university.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Alumni Events & Reunions</a> – Calendar of upcoming events, sign-up options.</li>
            </ul>
        </div>

        <!-- Financial & Funding Assistance -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-red-700 mb-2">Financial & Funding Assistance</h2>
            <ul class="list-disc list-inside">
                <li><a href="#" class="text-blue-600 hover:underline">Scholarships & Grants</a> – Available funding for further education.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Startup & Business Funding</a> – Support for alumni entrepreneurs.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Alumni Discounts</a> – Special discounts for alumni on campus services, online courses, etc.</li>
            </ul>
        </div>

        <!-- Campus & Institutional Resources -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-red-700 mb-2">Campus & Institutional Resources</h2>
            <ul class="list-disc list-inside">
                <li><a href="#" class="text-blue-600 hover:underline">University News & Updates</a> – Latest announcements, achievements.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Access to Transcripts & Certificates</a> – How to request academic documents.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Alumni ID & Benefits</a> – How to apply for an alumni ID, perks available.</li>
            </ul>
        </div>

        <!-- Academic & Learning Resources -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-red-700 mb-2">Academic & Learning Resources</h2>
            <ul class="list-disc list-inside">
                <li><a href="#" class="text-blue-600 hover:underline">Online Courses & Certifications</a> – Links to free/discounted courses (Coursera, Udemy, etc.).</li>
                <li><a href="#" class="text-blue-600 hover:underline">Research & Publications</a> – Access to university research, journals, and publications.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Alumni Guest Lectures & Webinars</a> – Videos or live sessions from experienced alumni.</li>
                <li><a href="#" class="text-blue-600 hover:underline">Library Access</a> – Digital archives, e-books, thesis papers.</li>
            </ul>
        </div> 
    </div>
</div>

@endsection