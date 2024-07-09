<x-app-layout>
    <div
        class="sticky top-0 w-full h-14 bg-transparent backdrop-blur-sm flex text-center border-b border-r border-slate-700">
        <div
            class="w-1/2 flex justify-center items-center hover:cursor-pointer hover:bg-opacity-80 duration-100 delay-[50] hover:bg-slate-800">
            <div class="border-b-4 border-blue-500 font-bold h-full flex items-center">
                For you
            </div>
        </div>

        <div
            class="w-1/2 flex justify-center items-center hover:cursor-pointer hover:bg-opacity-80 duration-100 delay-[50] hover:bg-slate-800 text-gray-500">
            <div>
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
                <form action="{{ route('post.store') }}" wire:submit='save' method="POST" enctype="multipart/form-data">
                    @csrf

                    <textarea id="" class="w-full bg-black border-none " name="content" wire:model='content'
                        placeholder="What is happening?"></textarea>

                    <div class="flex justify-between items-center border-t pt-5 border-gray-700">
                        <div class="text-blue-400 flex space-x-3">
                            <div>
                                <label for="file" class="cursor-pointer">
                                    <iconify-icon icon="ion:image-outline" height='22px'></iconify-icon>
                                </label>
                                <input type="file" name="file" id="file" multiple class="hidden"
                                    wire:model='file'>
                            </div>

                            <div>
                                <label for="" class="cursor-pointer">
                                    <iconify-icon icon="fluent:gif-24-regular" height='23px'></iconify-icon>
                                </label>
                            </div>

                            <div>
                                <label for="" class="cursor-pointer">
                                    <iconify-icon icon="ri:list-radio" height='22px'></iconify-icon>
                                </label>
                            </div>

                            <div>
                                <label for="" class="cursor-pointer">
                                    <iconify-icon icon="mingcute:emoji-line" height='22px'></iconify-icon>
                                </label>
                            </div>

                            <div>
                                <label for="" class="cursor-pointer">
                                    <iconify-icon icon="akar-icons:schedule" height='22px'></iconify-icon>
                                </label>
                            </div>

                            <div>
                                <label for="" class="cursor-pointer">
                                    <iconify-icon icon="ep:location" height='22px'></iconify-icon>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="px-5 py-1 bg-blue-500 rounded-full ">Post</button>
                    </div>
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
                        <p class="pb-2">{{ $tweet->content }}</p>
                        <img src="{{ asset('/storage/tweets/' . $tweet->file) }}" alt=""
                            class="rounded-lg max-h-[500px]">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
