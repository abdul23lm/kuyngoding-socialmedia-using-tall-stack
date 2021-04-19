<div class="bg-cool-gray-50 border border-cool-gray-200 mb-5 rounded-lg ml-5 -mt-8 mr-5">
    @foreach ($comments as $comment)
        <div class="flex last:border-b-0 border-cool-gray-200 p-5">
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ $comment->user->gravatar()}}">
            </div>
            <div>
                <div class="font-semibold">{{ $comment->user->name }}</div>
                <div class="text-sm text-cool-gray-600 mb-2">{{ $comment->created_at->diffForHumans() }}</div>
                <div class="leading-relaxed text-cool-gray-700">{!! nl2br($comment->body) !!}</div>
            </div>
        </div>
    @endforeach
</div>
