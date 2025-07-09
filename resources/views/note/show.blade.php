<link rel="stylesheet" href="../resources/css/app.css">
@vite('resources/css/app.css')
<x-layout>
    <div class="max-w-3xl mx-auto py-8 px-4 font-poppins">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Header -->
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50/50">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-semibold text-gray-900">Note: {{ $note->created_at }}</h1>
                    <div class="flex items-center space-x-2">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('note.edit', $note) }}"
                            class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200">
                            Edit
                        </a>
                        <button
                            class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors duration-200">
                            Delete
                        </button>
                      
                    </div>
                </div>
            </div>

            <!-- Note Content -->
            <div class="px-6 py-8">
                <div class="prose prose-gray max-w-none">
                    <div class="text-gray-700 leading-relaxed whitespace-pre-wrap">
                        {{ $note->note }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
