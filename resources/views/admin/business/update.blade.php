<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Business') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-center pb-2">
                        <h1>Edit Business</h1>
                        <p><a href="{{ route('admin/businesses') }}" class="btn btn-primary">Go Back</a></p>
                    </div>
                    <hr class="pb-4" />

                    <form action="{{ route('admin/businesses/update', $businesses->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input class="form-control" id="title" name="title" placeholder="Business Title" value="{{ $businesses->title }}" required>
                            <label for="title">Title</label>
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="body" name="body" placeholder="Business Body Text">{{ $businesses->body }}</textarea>
                            @error('body')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-2 pe-lg-0">
                                <div class="form-floating mb-lg-3">
                                    <input class="form-control" id="url_type" name="url_type" placeholder="Business URL Type" value="{{ $businesses->url_type }}" required>
                                    <label for="url_type">URL Type</label>
                                    @error('url_type')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-10 ps-lg-0">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="url" name="url" placeholder="Business URL" value="{{ $businesses->url }}" required>
                                    <label for="url">URL</label>
                                    @error('url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Current Image</label>
                                <img src="{{ asset('storage/' . $businesses->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Upload New Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Business Image" accept="image/*">
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
