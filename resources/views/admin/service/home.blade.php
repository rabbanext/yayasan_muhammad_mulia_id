<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h1 class="mb-0">List Service</h1>
                        <a href="{{ route('admin/services/create') }}" class="btn btn-primary">Add Service</a>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $service->title }}</td>
                                <td class="align-middle">{{ $service->category }}</td>
                                <td class="align-middle">
                                    <div class="short-text">
                                        <!-- Show the truncated version using Str::limit() -->
                                        {!! \Illuminate\Support\Str::limit($service->body, 100, '...') !!}
                                        <a href="javascript:void(0);" class="view-more text-primary" onclick="toggleText(this)">View More</a>
                                    </div>
                                    <div class="full-text" style="display: none;">
                                        <!-- Show the full content -->
                                        {!! $service->body !!}
                                        <a href="javascript:void(0);" class="view-less text-primary" onclick="toggleText(this)">View Less</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="width: 100px; height: auto;">
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('admin/services/edit', ['id'=>$service->id]) }}" class="btn btn-success me-2">Edit</a>
                                        <form action="{{ route('admin/services/delete', ['id'=>$service->id]) }}" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Service not found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
<script>
    function toggleText(element) {
        var shortText = element.closest('td').querySelector('.short-text');
        var fullText = element.closest('td').querySelector('.full-text');
        
        if (shortText.style.display === 'none') {
            shortText.style.display = 'block';
            fullText.style.display = 'none';
        } else {
            shortText.style.display = 'none';
            fullText.style.display = 'block';
        }
    }
</script>
