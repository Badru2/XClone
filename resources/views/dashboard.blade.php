<x-app-layout>
    <div
        class="sticky top-0 w-full h-12 bg-transparent backdrop-blur-sm flex text-center border-b border-r border-slate-700">
        <div class="w-1/2 hover:cursor-pointer hover:bg-opacity-80 hover:bg-slate-800">
            <div class="mt-2">
                For you
            </div>
        </div>

        <div class="w-1/2 hover:cursor-pointer hover:bg-opacity-80 hover:bg-slate-800 ">
            <div class="mt-2">
                Following
            </div>
        </div>
    </div>

    <div class="border-b border-r border-slate-700">
        <div class="flex p-4">
            <div class="w-[50px]">
                <div class="w-10 h-10 bg-gray-500 rounded-full"></div>
            </div>
            <div class="w-[550px]">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <textarea id="" class="w-full bg-black border-0 focus:border-none" name="content"
                        placeholder="What is happening?"></textarea>
                    <button class="px-5 py-1 bg-blue-500 rounded-full">Post</button>
                </form>
            </div>
        </div>
    </div>

    @foreach ($tweets as $tweet)
        <div class="border-b border-r border-slate-700">
            <div class="flex p-4">
                <div class="w-[50px]">
                    <div class="w-10 h-10 bg-gray-500 rounded-full "></div>
                </div>
                <div class="w-[550px]">
                    <a href="" class="hover:underline">{{ $tweet->user->name }}</a>
                    <a href="" class="text-gray-600 hover:underline">{{ $tweet->user->email }}</a>
                    <span class="text-gray-600">{{ ' - ' . $tweet->created_at->diffForHumans() }}</span>
                    <div>
                        {{ $tweet->content }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
