<x-layout title="Browse Opportunities | JobHunt">
    
    <!-- Hero / Filter Banner -->
    <div class="rounded-3xl bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 p-8 sm:p-10 text-white mb-8 shadow-xl">
        <div class="max-w-2xl">
            <span class="inline-block px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-xs font-medium uppercase tracking-wider mb-4 border border-indigo-400/30">
                Over 250+ tech positions added
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mb-3">
                Find your next role in engineering.
            </h1>
            <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
                Explore verified opportunities from modern tech teams across software engineering, QA, DevOps, and cloud.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="bg-white p-2 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-2 max-w-3xl">
            <div class="flex-1 flex items-center px-4 py-2 border-b sm:border-b-0 sm:border-r border-slate-100">
                <svg class="w-5 h-5 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" placeholder="Job title, keywords, or company..." class="w-full text-sm text-slate-800 outline-none placeholder:text-slate-400">
            </div>
            <div class="flex items-center px-4 py-2">
                <svg class="w-5 h-5 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <input type="text" placeholder="Location or Remote" class="w-full text-sm text-slate-800 outline-none placeholder:text-slate-400">
            </div>
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-xl text-sm transition">
                Search
            </button>
        </div>
    </div>

    <!-- Main Content Section: Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        
        <!-- Sidebar Filters -->
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4">Job Type</h3>
                <div class="space-y-3 text-sm text-slate-600">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" checked class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Full-time</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Contract</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Remote</span>
                    </label>
                </div>

                <hr class="my-6 border-slate-100">

                <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4">Experience Level</h3>
                <div class="space-y-3 text-sm text-slate-600">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="radio" name="level" checked class="text-indigo-600 focus:ring-indigo-500">
                        <span>Entry Level / Fresh Grad</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="radio" name="level" class="text-indigo-600 focus:ring-indigo-500">
                        <span>Mid-Level</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="radio" name="level" class="text-indigo-600 focus:ring-indigo-500">
                        <span>Senior</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Job Cards List -->
        <div class="lg:col-span-3 space-y-4">
            
            <div class="flex justify-between items-center mb-2">
                <h2 class="text-lg font-bold text-slate-900">Featured Positions</h2>
                <span class="text-xs font-medium text-slate-500">Showing recent listings</span>
            </div>

            @forelse ($jobs ?? [
                ['title' => 'Junior Laravel Developer', 'salary' => '45,000 - 55,000', 'company' => 'TechCorp Global', 'location' => 'Amman / Remote'],
                ['title' => 'QA Manual Test Engineer', 'salary' => '38,000 - 48,000', 'company' => 'QualityHub', 'location' => 'Amman, Jordan'],
                ['title' => 'Full-Stack PHP Engineer', 'salary' => '60,000 - 75,000', 'company' => 'CloudScale', 'location' => 'Remote']
            ] as $job)
                <div class="group bg-white rounded-2xl p-6 border border-slate-200/80 hover:border-indigo-300 hover:shadow-md transition duration-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-slate-100 group-hover:bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-base transition">
                            {{ substr(is_array($job) ? $job['title'] : $job->title, 0, 1) }}
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base group-hover:text-indigo-600 transition">
                                {{ is_array($job) ? $job['title'] : $job->title }}
                            </h3>
                            <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-slate-500 mt-1">
                                <span class="font-medium text-slate-700">{{ is_array($job) ? ($job['company'] ?? 'Venture Lab') : ($job->company ?? 'Venture Lab') }}</span>
                                <span>&bull;</span>
                                <span>{{ is_array($job) ? ($job['location'] ?? 'Remote') : ($job->location ?? 'Remote') }}</span>
                                <span>&bull;</span>
                                <span class="text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded-full">
                                    ${{ is_array($job) ? $job['salary'] : $job->salary }} / yr
                                </span>
                            </div>
                        </div>
                    </div>

                    <a href="/job" class="w-full sm:w-auto inline-flex items-center justify-center px-4 py-2 rounded-xl text-xs font-semibold bg-slate-50 text-slate-700 group-hover:bg-indigo-600 group-hover:text-white border border-slate-200 group-hover:border-indigo-600 transition">
                        View Details &rarr;
                    </a>
                </div>
            @empty
                <div class="p-12 text-center bg-white rounded-2xl border border-dashed border-slate-200">
                    <p class="text-slate-400 text-sm">No active listings matching your filters.</p>
                </div>
            @endforelse

        </div>

    </div>

</x-layout>