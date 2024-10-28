<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Activity') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-center pb-2">
                        <h1>Add New Activity</h1>
                        <p><a href="{{ route('admin/activities') }}" class="btn btn-primary">Go Back</a></p>
                    </div>
                    <hr class="pb-4" />

                    <form action="{{ route('admin/activities/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="title" name="title" placeholder="Activity Title" required>
                            <label for="title">Title</label>
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="body" name="body" placeholder="Activity Body Text"></textarea>
                            @error('body')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="file" name="image" class="form-control" placeholder="Image" accept="image/*" required>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- CKEditor Script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('textarea[name=body]'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-dashboard-layout>
