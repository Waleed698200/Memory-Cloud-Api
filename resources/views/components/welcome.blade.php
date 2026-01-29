<div class="space-y-10">
    <section class="overflow-hidden rounded-3xl bg-white/95 p-8 shadow-2xl ring-1 ring-white/30 backdrop-blur sm:p-10 lg:p-12">
        <div class="grid gap-12 lg:grid-cols-[1.35fr_1fr] lg:items-center">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-indigo-500">Memoria Cloud</p>
                <h1 class="mt-4 text-4xl font-semibold text-slate-900 sm:text-5xl">
                    Your autobiography, guided and preserved.
                </h1>
                <p class="mt-5 text-base leading-relaxed text-slate-700 sm:text-lg">
                    Answer one thoughtful question at a time. Memoria Cloud weaves your words into a living memoir
                    for your family.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ config('app.frontend_url') }}" class="inline-flex items-center justify-center rounded-full bg-indigo-600 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-indigo-600/30 transition hover:bg-indigo-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2">
                        Start Story
                    </a>
                    <a href="{{ route('profile.show') }}" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-7 py-3.5 text-base font-semibold text-slate-800 transition hover:border-slate-300 hover:text-slate-900 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-300 focus-visible:ring-offset-2">
                        Update profile
                    </a>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200/80 bg-white/80 p-6 shadow-sm sm:p-7">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-500">Session highlights</p>
                <div class="mt-5 space-y-4 text-base text-slate-700">
                    <div class="flex items-center justify-between">
                        <span>Memories captured</span>
                        <span class="text-lg font-semibold text-slate-900">12</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Topics completed</span>
                        <span class="text-lg font-semibold text-slate-900">4</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Next prompt</span>
                        <span class="font-semibold text-indigo-600">Family roots</span>
                    </div>
                </div>
                <div class="mt-7 rounded-xl bg-slate-900 p-5 text-sm text-slate-100">
                    <p class="font-semibold uppercase tracking-[0.2em] text-slate-300">Tip</p>
                    <p class="mt-2 text-slate-200">
                        Set aside 10 quiet minutes to answer today’s prompt thoughtfully.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid gap-6 lg:grid-cols-3">
        <div class="rounded-2xl bg-white/95 p-6 shadow-lg ring-1 ring-white/20 sm:p-7">
            <p class="text-base font-semibold text-slate-900">1. Capture memories</p>
            <p class="mt-3 text-sm leading-relaxed text-slate-600">
                The chatbot guides you with warm, personal questions.
            </p>
        </div>
        <div class="rounded-2xl bg-white/95 p-6 shadow-lg ring-1 ring-white/20 sm:p-7">
            <p class="text-base font-semibold text-slate-900">2. Organize chapters</p>
            <p class="mt-3 text-sm leading-relaxed text-slate-600">
                We group answers into beautiful, readable chapters.
            </p>
        </div>
        <div class="rounded-2xl bg-white/95 p-6 shadow-lg ring-1 ring-white/20 sm:p-7">
            <p class="text-base font-semibold text-slate-900">3. Share the legacy</p>
            <p class="mt-3 text-sm leading-relaxed text-slate-600">
                Export and share your memoir with children and grandchildren.
            </p>
        </div>
    </section>

    <section class="grid gap-6 lg:grid-cols-2">
        <div class="rounded-2xl bg-white/95 p-6 shadow-lg ring-1 ring-white/20 sm:p-7">
            <p class="text-base font-semibold text-slate-900">Upcoming prompts</p>
            <ul class="mt-4 space-y-3 text-sm text-slate-600">
                <li class="flex items-center justify-between">
                    <span>Childhood home and neighborhood</span>
                    <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-600">Tomorrow</span>
                </li>
                <li class="flex items-center justify-between">
                    <span>First job and early ambitions</span>
                    <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-600">This week</span>
                </li>
                <li class="flex items-center justify-between">
                    <span>Family traditions and celebrations</span>
                    <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-600">This week</span>
                </li>
            </ul>
        </div>
        <div class="rounded-2xl bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 p-6 text-slate-100 shadow-lg sm:p-7">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-200">Memory vault</p>
            <h3 class="mt-4 text-2xl font-semibold sm:text-3xl">Every story matters.</h3>
            <p class="mt-3 text-sm leading-relaxed text-indigo-100/90">
                Keep your autobiography private, encrypted, and ready to pass down when the time is right.
            </p>
            <div class="mt-6 flex flex-wrap items-center gap-3 text-xs text-indigo-200/80">
                <span class="rounded-full bg-white/10 px-3 py-1.5">Secure</span>
                <span class="rounded-full bg-white/10 px-3 py-1.5">Private</span>
                <span class="rounded-full bg-white/10 px-3 py-1.5">Legacy-ready</span>
            </div>
        </div>
    </section>
</div>
