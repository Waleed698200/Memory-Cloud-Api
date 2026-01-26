<div class="space-y-8">
    <section class="overflow-hidden rounded-3xl bg-white/90 p-8 shadow-2xl ring-1 ring-white/20 backdrop-blur">
        <div class="grid gap-10 lg:grid-cols-[1.4fr_1fr] lg:items-center">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-500">Memoria Cloud</p>
                <h1 class="mt-4 text-3xl font-semibold text-slate-900">Your autobiography, guided and preserved.</h1>
                <p class="mt-4 text-slate-600">
                    Answer one thoughtful question at a time and let Memoria Cloud craft a living memoir for your family.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ config('app.frontend_url') }}" class="inline-flex items-center rounded-full bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/30 transition hover:bg-indigo-500">
                        Start your interview
                    </a>
                    <a href="{{ route('profile.show') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-slate-300 hover:text-slate-900">
                        Update profile
                    </a>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200/80 bg-white/70 p-6 shadow-sm">
                <p class="text-sm font-semibold text-slate-700">Session highlights</p>
                <div class="mt-4 space-y-4 text-sm text-slate-600">
                    <div class="flex items-center justify-between">
                        <span>Memories captured</span>
                        <span class="font-semibold text-slate-900">12</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Topics completed</span>
                        <span class="font-semibold text-slate-900">4</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Next prompt</span>
                        <span class="font-semibold text-indigo-600">Family roots</span>
                    </div>
                </div>
                <div class="mt-6 rounded-xl bg-slate-900 p-4 text-xs text-slate-100">
                    <p class="font-semibold">Tip</p>
                    <p class="mt-2 text-slate-300">Set aside 10 quiet minutes to answer today’s prompt thoughtfully.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid gap-6 lg:grid-cols-3">
        <div class="rounded-2xl bg-white/90 p-6 shadow-lg ring-1 ring-white/20">
            <p class="text-sm font-semibold text-slate-900">1. Capture memories</p>
            <p class="mt-3 text-sm text-slate-600">The chatbot guides you with warm, personal questions.</p>
        </div>
        <div class="rounded-2xl bg-white/90 p-6 shadow-lg ring-1 ring-white/20">
            <p class="text-sm font-semibold text-slate-900">2. Organize chapters</p>
            <p class="mt-3 text-sm text-slate-600">We group answers into beautiful, readable chapters.</p>
        </div>
        <div class="rounded-2xl bg-white/90 p-6 shadow-lg ring-1 ring-white/20">
            <p class="text-sm font-semibold text-slate-900">3. Share the legacy</p>
            <p class="mt-3 text-sm text-slate-600">Export and share your memoir with children and grandchildren.</p>
        </div>
    </section>

    <section class="grid gap-6 lg:grid-cols-2">
        <div class="rounded-2xl bg-white/90 p-6 shadow-lg ring-1 ring-white/20">
            <p class="text-sm font-semibold text-slate-900">Upcoming prompts</p>
            <ul class="mt-4 space-y-3 text-sm text-slate-600">
                <li class="flex items-center justify-between">
                    <span>Childhood home and neighborhood</span>
                    <span class="text-xs font-semibold text-indigo-500">Tomorrow</span>
                </li>
                <li class="flex items-center justify-between">
                    <span>First job and early ambitions</span>
                    <span class="text-xs font-semibold text-indigo-500">This week</span>
                </li>
                <li class="flex items-center justify-between">
                    <span>Family traditions and celebrations</span>
                    <span class="text-xs font-semibold text-indigo-500">This week</span>
                </li>
            </ul>
        </div>
        <div class="rounded-2xl bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 p-6 text-slate-100 shadow-lg">
            <p class="text-sm font-semibold text-indigo-200">Memory vault</p>
            <h3 class="mt-4 text-2xl font-semibold">Every story matters.</h3>
            <p class="mt-3 text-sm text-indigo-100/90">
                Keep your autobiography private, encrypted, and ready to pass down when the time is right.
            </p>
            <div class="mt-6 flex items-center gap-3 text-xs text-indigo-200/80">
                <span class="rounded-full bg-white/10 px-3 py-1">Secure</span>
                <span class="rounded-full bg-white/10 px-3 py-1">Private</span>
                <span class="rounded-full bg-white/10 px-3 py-1">Legacy-ready</span>
            </div>
        </div>
    </section>
</div>
