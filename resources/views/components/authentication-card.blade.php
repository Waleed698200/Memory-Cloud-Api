<div class="relative min-h-screen bg-slate-950 text-slate-900">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-24 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-indigo-500/40 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-72 w-72 translate-x-1/3 translate-y-1/3 rounded-full bg-sky-500/30 blur-3xl"></div>
    </div>

    <div class="relative flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid w-full max-w-5xl overflow-hidden rounded-3xl bg-white/90 shadow-2xl ring-1 ring-white/10 backdrop-blur lg:grid-cols-2">
            <div class="hidden flex-col justify-between bg-gradient-to-br from-slate-950 via-indigo-950 to-slate-900 p-10 text-white lg:flex">
                <div class="flex items-center gap-3">
                    {{ $logo }}
                    <span class="text-lg font-semibold tracking-wide">Memoria Cloud</span>
                </div>
                <div>
                    <p class="text-2xl font-semibold leading-tight">Preserve your story with calm, guided conversations.</p>
                    <p class="mt-4 text-sm text-indigo-100/90">A private, secure memoir that your family can treasure for generations.</p>
                </div>
                <p class="text-xs uppercase tracking-[0.3em] text-indigo-200/80">Autobiography • Legacy • Memory</p>
            </div>

            <div class="px-8 py-10 sm:px-12">
                <div class="flex items-center gap-3 lg:hidden">
                    {{ $logo }}
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Memoria Cloud</p>
                        <p class="text-xs text-slate-500">Autobiography that lives on</p>
                    </div>
                </div>

                <div class="mt-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
