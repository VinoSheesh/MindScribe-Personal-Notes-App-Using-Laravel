<link rel="stylesheet" href="../resources/css/app.css">
@vite('resources/css/app.css')
<x-layout>
    <div class="min-h-screen bg-gray-50 py-8 px-4">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit your note</h1>
                
                <form action="{{ route("note.update", $note) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <textarea 
                            name="note" 
                            rows="10" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none text-gray-700 placeholder-gray-400 transition duration-200 ease-in-out" 
                            placeholder="Enter your note here">{{ $note->note }}</textarea>
                    </div>
                    
                    <div class="flex justify-end space-x-3">
                        <a href="{{ route("note.index") }}" 
                           class="px-6 py-2.5 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition duration-200 ease-in-out font-medium">
                            Cancel
                        </a>
                        <button type="submit" 
                                class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 ease-in-out font-medium">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>