<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit post') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('posts.update',$post->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row-span-3">
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <x-label for="title" :value="__('Title')" />
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    :value="$post->title" autofocus />
                            </div>
                            <br>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <x-label for="summernote" :value="__('Description')" />
                                <textarea id="summernote" name="description">{!! $post->description !!}</textarea>

                            </div>
                            <br>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <x-label for="category_id" :value="__('Category')" />
                                <x-categories :selectedId="$post->category_id"></x-categories>
                            </div>

                        </div>
                        <br><br>
                        <x-button class="my-4">
                            {{ __('Update Post') }}
                        </x-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
