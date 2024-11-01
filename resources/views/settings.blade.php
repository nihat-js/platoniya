@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Settings</h2>

    <div class="bg-white shadow-md rounded p-6">
        <h3 class="font-semibold text-lg mb-2">Notification Preferences</h3>
        <form action="{{ route('settings.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="email_notifications" class="flex items-center">
                    <input type="checkbox" name="email_notifications" id="email_notifications" class="form-checkbox">
                    <span class="ml-2">Email Notifications</span>
                </label>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Save Settings</button>
        </form>
    </div>
@endsection
