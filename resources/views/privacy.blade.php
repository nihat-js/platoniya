@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Privacy Policy</h2>
    
    <div class="bg-white shadow-md rounded p-6">
        <p class="mb-4">Your privacy is important to us. It is Your Task Manager's policy to respect your privacy regarding any information we may collect from you across our website, <a href="{{ url('/') }}" class="text-blue-500 underline">yourtaskmanager.com</a>, and other sites we own and operate.</p>

        <h3 class="font-semibold mt-4">Information We Collect</h3>
        <p class="mb-4">We may collect personal information such as your name, email address, and any other information you provide while using our services.</p>

        <h3 class="font-semibold mt-4">How We Use Your Information</h3>
        <p class="mb-4">We use the information we collect to provide, maintain, and improve our services. We may also use your information to contact you with newsletters, marketing, or promotional materials.</p>

        <h3 class="font-semibold mt-4">Your Rights</h3>
        <p class="mb-4">You have the right to request access to the personal information we hold about you. You may also request correction or deletion of your personal information.</p>

        <h3 class="font-semibold mt-4">Changes to This Privacy Policy</h3>
        <p class="mb-4">We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>

        <p class="mb-4">This policy is effective as of [Insert Date].</p>
    </div>
@endsection
