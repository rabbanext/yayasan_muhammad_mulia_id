<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Business') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h1 class="mb-0">List Business</h1>
                        <a href="{{ route('admin/businesses/create') }}" class="btn btn-primary">Add Business</a>
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
                                <th>Body</th>
                                <th colspan="2">URL</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($businesses as $business)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $business->title }}</td>
                                <td class="align-middle">
                                    <div class="short-text">
                                        <!-- Show the truncated version using Str::limit() -->
                                        {!! \Illuminate\Support\Str::limit($business->body, 100, '...') !!}
                                        <a href="javascript:void(0);" class="view-more text-primary" onclick="toggleText(this)">View More</a>
                                    </div>
                                    <div class="full-text" style="display: none;">
                                        <!-- Show the full content -->
                                        {!! $business->body !!}
                                        <a href="javascript:void(0);" class="view-less text-primary" onclick="toggleText(this)">View Less</a>
                                    </div>
                                </td>
                                <td class="align-middle">{{ $business->url_type }}:</td>
                                <td class="align-middle">
                                    <a href="{{ $business->url }}" class="text-primary">{{ $business->url }}</a>
                                </td>
                                <td class="align-middle">
                                    <img src="{{ asset('storage/' . $business->image) }}" alt="{{ $business->title }}" style="width: 100px; height: auto;">
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('admin/businesses/edit', ['id'=>$business->id]) }}" class="btn btn-success me-2">Edit</a>
                                        <form action="{{ route('admin/businesses/delete', ['id'=>$business->id]) }}" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this business?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Business not found</td>
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
