<x-layouts::app :title="__('dashboard.page_title')">

    ```
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="space-y-6">

        {{-- Header --}}
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">

            <div>
                <p class="text-sm text-zinc-500">
                    {{ __('dashboard.welcome', ['name' => auth()->user()->name]) }}
                </p>

                <h1 class="text-2xl font-bold text-zinc-900 dark:text-white">
                    {{ __('dashboard.overview_title') }}
                </h1>
            </div>

            <a href="{{ route('home') }}"
                class="rounded-lg bg-[#b9622c] px-4 py-2 text-center text-sm font-bold text-white">
                {{ __('dashboard.view_website') }}
            </a>

        </div>


        {{-- Statistics --}}
        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">

            @foreach ([['new_requests', '18', '+12%'], ['contact_messages', '32', '+8%'], ['potential_partners', '7', '+2'], ['products_in_development', '2', 'stable']] as $stat)
                <article class="rounded-xl border border-zinc-200 bg-white p-5 dark:border-zinc-700 dark:bg-zinc-900">

                    <p class="text-sm text-zinc-500">
                        {{ __('dashboard.stats.' . $stat[0]) }}
                    </p>

                    <div class="mt-3 flex items-end justify-between">

                        <b class="text-3xl text-zinc-900 dark:text-white">
                            {{ $stat[1] }}
                        </b>

                        <span class="rounded-full bg-green-50 px-2 py-1 text-xs font-bold text-green-700">
                            {{ $stat[2] === 'stable' ? __('dashboard.stable') : $stat[2] }}
                        </span>

                    </div>

                </article>
            @endforeach

        </div>


        {{-- Main Dashboard Content --}}
        <div class="grid gap-4 xl:grid-cols-3">

            {{-- Recent Requests --}}
            <section
                class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900 xl:col-span-2">

                <div class="mb-6 flex items-center justify-between">

                    <h2 class="font-bold">
                        {{ __('dashboard.recent_requests.title') }}
                    </h2>

                    <button class="text-sm font-bold text-[#b9622c]">
                        {{ __('dashboard.recent_requests.view_all') }}
                    </button>

                </div>


                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead class="text-zinc-500">

                            <tr class="border-b border-zinc-200">

                                <th class="pb-3 text-start">
                                    {{ __('dashboard.recent_requests.organization') }}
                                </th>

                                <th class="pb-3 text-start">
                                    {{ __('dashboard.recent_requests.product') }}
                                </th>

                                <th class="pb-3 text-start">
                                    {{ __('dashboard.recent_requests.quantity') }}
                                </th>

                                <th class="pb-3 text-start">
                                    {{ __('dashboard.recent_requests.status') }}
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach ([['hope_foundation', 'mix_50', '120_bags', 'under_review'], ['al_bunyan_workshop', 'mix_25', '40_bags', 'contacted'], ['our_home_initiative', 'mix_10', '75_bags', 'new'], ['engineer_ahmed', 'test_sample', '4_bags', 'completed']] as $row)
                                <tr class="border-b border-zinc-100">

                                    <td class="py-4 font-bold">
                                        {{ __('dashboard.requests.' . $row[0]) }}
                                    </td>

                                    <td>
                                        {{ __('dashboard.requests.' . $row[1]) }}
                                    </td>

                                    <td>
                                        {{ __('dashboard.requests.' . $row[2]) }}
                                    </td>

                                    <td>
                                        <span class="rounded-full bg-zinc-100 px-2 py-1 text-xs">
                                            {{ __('dashboard.requests.' . $row[3]) }}
                                        </span>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </section>


            {{-- Product Progress --}}
            <section class="rounded-xl bg-[#343634] p-6 text-white">

                <h2 class="font-bold">
                    {{ __('dashboard.product_progress.title') }}
                </h2>

                <p class="mt-1 text-sm text-white/60">
                    {{ __('dashboard.product_progress.subtitle') }}
                </p>


                <div class="my-8 grid place-items-center">

                    <div
                        class="grid h-40 w-40 place-items-center rounded-full border-[12px] border-[#5a9c42] border-l-white/10">

                        <div class="text-center">

                            <b class="text-3xl">
                                72%
                            </b>

                            <p class="text-xs text-white/60">
                                {{ __('dashboard.completed') }}
                            </p>

                        </div>

                    </div>

                </div>


                <div class="space-y-3 text-sm">

                    <div class="flex justify-between">
                        <span>
                            {{ __('dashboard.product_progress.mix_testing') }}
                        </span>

                        <b>
                            {{ __('dashboard.completed') }}
                        </b>
                    </div>

                    <div class="flex justify-between">
                        <span>
                            {{ __('dashboard.product_progress.field_trials') }}
                        </span>

                        <b>
                            {{ __('dashboard.in_progress') }}
                        </b>
                    </div>

                    <div class="flex justify-between">
                        <span>
                            {{ __('dashboard.product_progress.packaging_approval') }}
                        </span>

                        <b>
                            {{ __('dashboard.next') }}
                        </b>
                    </div>

                </div>

            </section>

        </div>

    </div>
    ```

</x-layouts::app>
