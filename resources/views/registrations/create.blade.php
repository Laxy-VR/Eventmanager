@extends('layout')

<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>
    <form action="{{ route('registrations.store') }}" method="POST" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
        @csrf

        <input type="hidden" name="event_id" value="{{ $event->id }}">
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="user_name">Username</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" name="user_name" value="{{ old('user_name') }}">
      
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="email" name="email" value="{{ old('email') }}">
      
      <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Register</button>
    </form>
</div>
