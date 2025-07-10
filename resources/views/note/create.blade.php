<link rel="stylesheet" href="../resources/css/app.css">
@vite('resources/css/app.css')
<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-8 px-4">
        <div class="max-w-3xl mx-auto">
            <!-- Header Section -->
            <div class="text-center flex gap-6 mb-1.5 justify-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full shadow-lg mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Create new note</h1>
                <p class="text-gray-600">Capture your thoughts and ideas</p>
                </div>
            </div>

            <!-- Form Card -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 p-8 hover:shadow-2xl transition-all duration-300">
                <form action="{{ route("note.store") }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Textarea Container -->
                    <div class="relative">
                        <textarea 
                            name="note" 
                            rows="12" 
                            class="w-full p-6 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 resize-none text-gray-700 placeholder-gray-400 transition-all duration-300 ease-in-out bg-gray-50/50 hover:bg-white focus:bg-white text-lg leading-relaxed" 
                            placeholder="What's on your mind today? Start writing your note here...">
                        </textarea>
                        
                        <!-- Character counter placeholder -->
                        <div class="absolute bottom-4 right-4 text-xs text-gray-400 bg-white/80 px-2 py-1 rounded-full">
                            Start typing...
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-end pt-2">
                        <a href="{{ route(name: "note.index") }}" class="px-8 py-3 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-xl transition-all duration-200 ease-in-out font-medium border-2 border-gray-200 hover:border-gray-300 text-center group">
                            <span class="inline-flex items-center gap-2">
                                <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Cancel
                            </span>
                        </a>
                        <button class="px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white rounded-xl transition-all duration-200 ease-in-out font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 group">
                            <span class="inline-flex items-center gap-2">
                                <svg class="w-4 h-4 group-hover:rotate-12 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Save Note
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Footer Tips -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-500">
                    💡 <span class="font-medium">Tip:</span> Use keyboard shortcuts - 
                    <kbd class="px-2 py-1 text-xs bg-gray-200 rounded">Ctrl+S</kbd> to save, 
                    <kbd class="px-2 py-1 text-xs bg-gray-200 rounded">Esc</kbd> to cancel
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
    