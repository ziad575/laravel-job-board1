<x-layout title="About Us | JobPulse">
    <div class="rounded-3xl bg-slate-900/60 border border-slate-800 p-8 sm:p-10 text-white backdrop-blur-xl max-w-4xl mx-auto shadow-2xl">
        <span class="inline-block px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-xs font-medium uppercase tracking-wider mb-4 border border-indigo-400/30">
            About Our Mission
        </span>
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-4">
            Job Board Platform
        </h1>
        <p class="text-sm text-slate-400 mb-6">
            Signed in as: <span class="font-semibold text-indigo-400">{{ $name ?? 'Candidate' }}</span>
        </p>
        <p class="text-slate-300 leading-relaxed">
            We connect skilled software developers and QA engineers with verified tech teams globally.
        </p>
    </div>
</x-layout>