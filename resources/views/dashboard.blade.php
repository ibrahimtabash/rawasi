<x-layouts::app :title="'لوحة تحكم رواسي'">
<div dir="rtl" class="space-y-6">
    <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
        <div><p class="text-sm text-zinc-500">مرحباً، {{ auth()->user()->name }}</p><h1 class="text-2xl font-bold text-zinc-900 dark:text-white">نظرة عامة على رواسي</h1></div>
        <a href="{{ route('home') }}" class="rounded-lg bg-[#b9622c] px-4 py-2 text-center text-sm font-bold text-white">عرض الموقع</a>
    </div>
    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
        @foreach([['طلبات جديدة','18','+12%'],['رسائل التواصل','32','+8%'],['شركاء محتملون','7','+2'],['منتجات قيد التطوير','2','مستقر']] as $stat)
        <article class="rounded-xl border border-zinc-200 bg-white p-5 dark:border-zinc-700 dark:bg-zinc-900"><p class="text-sm text-zinc-500">{{ $stat[0] }}</p><div class="mt-3 flex items-end justify-between"><b class="text-3xl text-zinc-900 dark:text-white">{{ $stat[1] }}</b><span class="rounded-full bg-green-50 px-2 py-1 text-xs font-bold text-green-700">{{ $stat[2] }}</span></div></article>
        @endforeach
    </div>
    <div class="grid gap-4 xl:grid-cols-3">
        <section class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900 xl:col-span-2"><div class="mb-6 flex items-center justify-between"><h2 class="font-bold">الطلبات الأخيرة</h2><button class="text-sm font-bold text-[#b9622c]">عرض الكل</button></div><div class="overflow-x-auto"><table class="w-full text-sm"><thead class="text-zinc-500"><tr class="border-b border-zinc-200"><th class="pb-3 text-start">الجهة</th><th class="pb-3 text-start">المنتج</th><th class="pb-3 text-start">الكمية</th><th class="pb-3 text-start">الحالة</th></tr></thead><tbody>@foreach([['مؤسسة الأمل','خلطة 50 كغ','120 كيس','قيد المراجعة'],['ورشة البنيان','خلطة 25 كغ','40 كيس','تم التواصل'],['مبادرة بيتنا','خلطة 10 كغ','75 كيس','جديد'],['المهندس أحمد','عينة اختبار','4 أكياس','مكتمل']] as $row)<tr class="border-b border-zinc-100"><td class="py-4 font-bold">{{ $row[0] }}</td><td>{{ $row[1] }}</td><td>{{ $row[2] }}</td><td><span class="rounded-full bg-zinc-100 px-2 py-1 text-xs">{{ $row[3] }}</span></td></tr>@endforeach</tbody></table></div></section>
        <section class="rounded-xl bg-[#343634] p-6 text-white"><h2 class="font-bold">تقدم المنتج</h2><p class="mt-1 text-sm text-white/60">المرحلة التجريبية الحالية</p><div class="my-8 grid place-items-center"><div class="grid h-40 w-40 place-items-center rounded-full border-[12px] border-[#5a9c42] border-l-white/10"><div class="text-center"><b class="text-3xl">72%</b><p class="text-xs text-white/60">مكتمل</p></div></div></div><div class="space-y-3 text-sm"><div class="flex justify-between"><span>اختبارات الخلطة</span><b>مكتمل</b></div><div class="flex justify-between"><span>التجارب الميدانية</span><b>جاري</b></div><div class="flex justify-between"><span>اعتماد العبوة</span><b>التالي</b></div></div></section>
    </div>
</div>
</x-layouts::app>
