<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Program') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-center pb-2">
                        <h1>Edit Program</h1>
                        <p><a href="{{ route('admin/programs') }}" class="btn btn-primary">Go Back</a></p>
                    </div>
                    <hr class="pb-4" />

                    <form action="{{ route('admin/programs/update', $programs->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input class="form-control" id="title" name="title" placeholder="Program Title" value="{{ $programs->title }}" required>
                            <label for="title">Title</label>
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="body" name="body" placeholder="Program Body Text">{{ $programs->body }}</textarea>
                            @error('body')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="category" name="category" required>
                                <option value="" disabled>Select Category</option>
                                <option value="education" {{ $programs->category == 'education' ? 'selected' : '' }}>Education</option>
                                <option value="economic" {{ $programs->category == 'economic' ? 'selected' : '' }}>Economic</option>
                                <option value="research" {{ $programs->category == 'research' ? 'selected' : '' }}>Research</option>
                                <option value="humanity" {{ $programs->category == 'humanity' ? 'selected' : '' }}>Humanity</option>
                                <option value="other" {{ $programs->category == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            <label for="category">Category</label>
                            @error('category')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Current Image</label>
                                <img src="{{ asset('storage/' . $programs->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Upload New Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Program Image" accept="image/*">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
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
