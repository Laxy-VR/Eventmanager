@extends('layout')


<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
  <div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Event</h1>
    <form action="{{ route('events.update', $event) }}" method="post" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
        @csrf
        @method('PATCH')
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" name="name" value="{{ $event->name}}">
      
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" name="description" value="{{ $event->description}}">
      
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="location">Location</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" name="location" value="{{ $event->location}}">
      
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="date">Date</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="date" name="date" value="{{ $event->date}}">
      
      <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Edit Event</button>
    </form>
  </div>

 