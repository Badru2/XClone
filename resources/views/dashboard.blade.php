<x-app-layout>
    <div class="sticky top-0 w-full h-12 bg-transparent">
        HOME
    </div>

    <div class="border-b border-r border-slate-800">
        <div class="flex p-4">
            <div class="w-[50px]">
                <div class="w-10 h-10 bg-gray-500 rounded-full"></div>
            </div>
            <div class="w-[550px]">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <textarea id="" class="w-full bg-black border-0" name="content" placeholder="What is happening?"></textarea>
                    <button class="px-5 py-1 bg-blue-500 rounded-full">Post</button>
                </form>
            </div>
        </div>
    </div>

    <div class="border-b border-r border-slate-800">
        <div class="flex p-4">
            <div class="w-[50px]">
                <div class="w-10 h-10 bg-gray-500 rounded-full "></div>
            </div>
            <div class="w-[550px]">
                <a href="" class="hover:underline">{{ Auth::user()->name . ' ' }}</a>
                <a href="" class="text-gray-600 hover:underline">{{ Auth::user()->email }}</a>
                <div>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos porro expedita dicta eaque illum!
                    Esse vel alias voluptates minima ea asperiores impedit debitis beatae omnis, minus vitae ducimus
                    eius repellat similique iste sapiente, fuga reiciendis fugiat quo velit? Vero et expedita hic
                    aliquid esse iure tenetur voluptatem atque a inventore, minus eveniet eaque mollitia commodi
                    tempore. Sint voluptatum earum corrupti autem, laboriosam fuga voluptatem illo asperiores doloribus
                    neque eos delectus illum? Maxime optio harum error dolores impedit commodi porro odio, fugit ab
                    pariatur. Illum voluptatem aliquam, totam omnis eveniet facere doloribus sequi eos delectus
                    exercitationem esse tempora velit sapiente distinctio.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
