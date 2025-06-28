<x-app-layout>
    {{-- <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
    
  </x-slot> --}}
    @include('layouts.navigation')

    <main class="flex-1 py-8 px-4 md:px-10 lg:px-20 xl:px-40">
        <div class="max-w-4xl mx-auto">
          <div class="bg-white shadow-lg rounded-xl overflow-hidden">
            <div class="p-6 md:p-8">
              <div class="mb-6">
                <h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-2">Discussion Forum: "Campus Life &amp; Events"</h1>
                <p class="text-slate-600 text-base leading-relaxed">
                  Share your thoughts, ask questions, and connect with fellow students about campus happenings, events, and daily life.
                </p>
              </div>
              <div class="border-t border-slate-200 pt-6">
                <h2 class="text-xl font-semibold text-slate-800 mb-4">Latest Posts</h2>
                <div class="space-y-6">
                  <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-lg border border-slate-200">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 h-10 shrink-0 border border-slate-300" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLHLi1XjXC67Jgg3i3yzzTRDgZH9brZTXCYshZluH3TA3DJv9GchJEFee9V7225ANecA2ZQOIlWnl6IY35r_PgcVEB43NIZRRmL8kZtLWnMpCLCEmL8VE7vVOESmUhuylsueXeOFRx90UTT_NqYiuWE1YQG9yGDUlliBl6i1BsdrO29uQicussKF1s9BvfBHLKjuAZQ-F8XdKazQIX3ZqtH_EhBusFzeQGN0RAK5wiK0WnVtziz5rBPgI6_IEQY5gL0nsjMeeD104e");'></div>
                    <div class="flex-grow">
                      <div class="flex items-center gap-2 mb-1">
                        <p class="text-slate-800 text-sm font-semibold">Sarah Chen</p>
                        <p class="text-slate-500 text-xs">1 hour ago</p>
                      </div>
                      <p class="text-slate-700 text-sm font-semibold leading-relaxed mb-1">Upcoming Spring Festival - Ideas Welcome!</p>
                      <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Hey everyone! We're starting to plan the annual Spring Festival. What kind of activities, food stalls, or performances would you like to see this year? Share your ideas!
                      </p>
                      <div class="flex items-center gap-4 mb-3">
                        <button class="flex items-center gap-1 text-slate-500 hover:text-[var(--primary-color)] transition-colors text-xs">
                          <span class="material-icons text-base">thumb_up_alt</span>
                          <span>18</span>
                        </button>
                        <button class="flex items-center gap-1 text-slate-500 hover:text-red-500 transition-colors text-xs">
                          <span class="material-icons text-base">thumb_down_alt</span>
                          <span>1</span>
                        </button>
                        <button class="flex items-center gap-1 text-slate-500 hover:text-[var(--primary-color)] transition-colors text-xs">
                          <span class="material-icons text-base">chat_bubble_outline</span>
                          <span>5 Comments</span>
                        </button>
                      </div>
                      <div class="space-y-3 pl-6 border-l-2 border-slate-200">
                        <div class="flex items-start gap-3">
                          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-8 h-8 shrink-0 border border-slate-300" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBU_eCNmA3Ej7jlCHApN5xqDI6703BLnqh4i8XURLPUQ2U9EaXROuDSDeb45qWD7goCDpjq_nOITM0smV1dRgat8YtwvnFyJ21c8EX82PBBV-7cd8wzpKUQ7i5xcAVTh3ThoycpaCWbW76cO5-2qh7wpiRyRcH_OjQZpeLRy5-ns9WP70f1MBKvTFL2eaVZ2fo8X35dZOifvdvXCWcQcx2xIjuAG4PZgVUHp-M4y91RtkCfOUta_4BarfQHnPLICBdBDzxJQaOyFOn4");'></div>
                          <div>
                            <div class="flex items-center gap-2 mb-0.5">
                              <p class="text-slate-800 text-xs font-semibold">David Lee</p>
                              <p class="text-slate-400 text-xs">30 mins ago</p>
                            </div>
                            <p class="text-slate-600 text-xs leading-relaxed">A battle of the bands would be awesome!</p>
                          </div>
                        </div>
                        <div class="flex items-start gap-3">
                          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-8 h-8 shrink-0 border border-slate-300" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCJO34p1W8WqivOuikTnWd9I6wrWR_PueHjsUsmZ-_-yEgALAIVI0KSDj1-Pzwk9UKI6SLnuoFBGJwFVKeaseJ7-7hngMTHLbEcG6U6GjqdMjTsw_5QAnMRf1FzwE6wZ6z127XOnMCHeXo-Xxn6ZHd5EiOkZyOGCjRq-QeJiAY2g_K8KDGKK1Tga0k8Sc_QUqHCBU5SYA_orL6IG6eaSwlPZLqpewBKWx44oeIWIvOjI9_MXUM81F2b4W2ClDUIeDawHwACLpSqJk2D");'></div>
                          <div>
                            <div class="flex items-center gap-2 mb-0.5">
                              <p class="text-slate-800 text-xs font-semibold">Emily Rodriguez</p>
                              <p class="text-slate-400 text-xs">15 mins ago</p>
                            </div>
                            <p class="text-slate-600 text-xs leading-relaxed">More diverse food options, please! Maybe some food trucks?</p>
                          </div>
                        </div>
                        <button class="text-xs font-medium text-[var(--primary-color)] hover:underline">View more comments</button>
                      </div>
                    </div>
                  </div>
                  <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-lg border border-slate-200">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 h-10 shrink-0 border border-slate-300" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBU_eCNmA3Ej7jlCHApN5xqDI6703BLnqh4i8XURLPUQ2U9EaXROuDSDeb45qWD7goCDpjq_nOITM0smV1dRgat8YtwvnFyJ21c8EX82PBBV-7cd8wzpKUQ7i5xcAVTh3ThoycpaCWbW76cO5-2qh7wpiRyRcH_OjQZpeLRy5-ns9WP70f1MBKvTFL2eaVZ2fo8X35dZOifvdvXCWcQcx2xIjuAG4PZgVUHp-M4y91RtkCfOUta_4BarfQHnPLICBdBDzxJQaOyFOn4");'></div>
                    <div class="flex-grow">
                      <div class="flex items-center gap-2 mb-1">
                        <p class="text-slate-800 text-sm font-semibold">David Lee</p>
                        <p class="text-slate-500 text-xs">3 hours ago</p>
                      </div>
                      <p class="text-slate-700 text-sm font-semibold leading-relaxed mb-1">Study Group for upcoming Midterms</p>
                      <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Anyone interested in forming a study group for the upcoming midterm exams? I'm focusing on Calculus and Physics. Let me know if you're in!
                      </p>
                      <div class="flex items-center gap-4 mb-3">
                        <button class="flex items-center gap-1 text-slate-500 hover:text-[var(--primary-color)] transition-colors text-xs">
                          <span class="material-icons text-base">thumb_up_alt</span>
                          <span>12</span>
                        </button>
                        <button class="flex items-center gap-1 text-slate-500 hover:text-red-500 transition-colors text-xs">
                          <span class="material-icons text-base">thumb_down_alt</span>
                          <span>0</span>
                        </button>
                        <button class="flex items-center gap-1 text-slate-500 hover:text-[var(--primary-color)] transition-colors text-xs">
                          <span class="material-icons text-base">chat_bubble_outline</span>
                          <span>2 Comments</span>
                        </button>
                      </div>
                      <div class="space-y-3 pl-6 border-l-2 border-slate-200">
                        <div class="flex items-start gap-3">
                          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-8 h-8 shrink-0 border border-slate-300" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDFa6bwGHFIJ5oJjQAVXYBDL91_5NpNfNPkyEQwnecdr5cpBOLAeoofUtUG0X_Fas2hR675KoXfh6qitESu9sDjDRCiF6Wi2KpnP7reG1Mx0OeoE-1ry146FkTVNDwxF7rkOA1OTt1AS0AJf56AmWaD5v0lFlZZx1bzUyXqqj9bBOFHQUKczDpxMGwmz6hZke0CqT5TNXlppuYuzrTQMZ8tclbHQuueCBaYWvGC50HnRoYQIma-MlDhz8nQFErhULMPi_dRvs4lb_7H");'></div>
                          <div>
                            <div class="flex items-center gap-2 mb-0.5">
                              <p class="text-slate-800 text-xs font-semibold">Maria Garcia</p>
                              <p class="text-slate-400 text-xs">1 hour ago</p>
                            </div>
                            <p class="text-slate-600 text-xs leading-relaxed">I'm in for Calculus! When and where?</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-8">
                  <textarea class="form-textarea w-full rounded-lg border-slate-300 focus:border-[var(--primary-color)] focus:ring-[var(--primary-color)] text-sm placeholder-slate-400" placeholder="Write your comment or start a new post..." rows="4"></textarea>
                  <button class="mt-3 flex items-center justify-center gap-2 w-full sm:w-auto rounded-lg h-10 px-5 bg-[var(--primary-color)] text-white text-sm font-semibold leading-normal tracking-wide hover:bg-blue-600 transition-colors">
                    <span class="material-icons text-lg">add_comment</span>
                    <span>Add New Comment / Post</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

</x-app-layout>
