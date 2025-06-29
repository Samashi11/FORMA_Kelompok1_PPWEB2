<div class="w-full flex-col justify-start items-start gap-8 flex">
    <div class="w-full flex-col justify-start items-end gap-5 flex">
        <div
            class="w-full p-6 bg-white rounded-2xl border border-gray-200 flex-col justify-start items-start gap-8 flex">
            <div class="w-full flex-col justify-center items-start gap-3.5 flex">
                <div class="w-full justify-between items-center inline-flex">
                    <div class="justify-start items-center gap-2.5 flex">
                        <div class="w-10 h-10 bg-gray-300 rounded-full justify-start items-start gap-2.5 flex">
                            <img class="rounded-full object-cover" src="https://pagedone.io/asset/uploads/1714988283.png"
                                alt="Jenny wilson image" />
                        </div>
                        <div class="flex-col justify-start items-start gap-1 inline-flex">
                            <h5 class="text-gray-900 text-sm font-semibold leading-snug">
                                {{ $name }}</h5>
                            <h6 class="text-gray-500 text-xs font-normal leading-5">
                               {{ Carbon\Carbon::parse($tanggal)->diffForHumans()}}</h6>
                        </div>
                    </div>
                </div>
                <p class="text-gray-800 text-sm font-normal leading-snug">
                    {{$comment}}</p>
            </div>
        </div>
    </div>
</div>
