<div>
    @foreach ($statuses as $status)
        <a href="#" class="flex mb-5">
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ $status->user->gravatar() }}">
            </div>
            <div>
                <div class="font-semibold text-cool-gray-900">{{ $status->user->name }}</div>
                <div class="text-cool-gray-800">{{ $status->body }}</div>
                <div class="text-sm text-cool-gray-400" >{{ $status->published }}</div>
            </div>
        </a>
    @endforeach
</div>
