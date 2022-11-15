<?php
$notices = App\Models\Notice::where('status', 'active')
    ->latest()
    ->limit(4)
    ->get();
?>
<div class="bg-primary p-4 md:p-10 lg:flex-1">
    <div class="lg:w-90 ml-auto space-y-7">
        <div class="text-xl lg:text-2xl text-white font-playFair font-700">
            NOTICE
        </div>
        <div class="space-y-2">
            @foreach ($notices as $key => $notice)
                @if ($key <= 0)
                    <div class="bg-white rounded border-l border-secondary p-4" style="border-left-width: 6px">
                        <div class="text-textLightSecondary text-xs">
                            {{ $notice->created_at->diffForHumans() }}
                        </div>
                        <div class="text-sm text-textDarkSecondary leading-6 pt-1">
                            {{ $notice->title }}
                        </div>
                    </div>
                @else
                    <div class="bg-white rounded p-4">
                        <div class="text-textLightSecondary text-xs">
                            {{ $notice->created_at->diffForHumans() }}
                        </div>
                        <div class="text-sm text-textDarkSecondary leading-6 pt-1">
                            {{ $notice->title }}
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
        <div class="flex justify-end lg:justify-start font-500 text-xs">
            <a href="{{ route('allNews') }}" class="flex items-center space-x-2 cursor-pointer text-white">
                <div>View All</div>
                <div>
                    <img src="./resources/images/icons/double-arrow-yellow.svg" alt="double arrow" />
                </div>
            </a>
        </div>
    </div>
</div>
