<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Service;
 
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $total = Service::count();
        return view('admin.Service.home', compact(['services', 'total']));
    }
 
    public function create()
    {
        return view('admin.Service.create');
    }
 
    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        $data = Service::create([
            'title' => $validation['title'],
            'category' => $validation['category'],
            'body' => $validation['body'],
            'image' => $imagePath,
        ]);

        if ($data) {
            session()->flash('success', 'Service Added Successfully');
            return redirect(route('admin/services'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.services/create'));
        }
    }

    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('admin.Service.update', compact('services'));
    }
 
    public function delete($id)
    {
        $service = Service::findOrFail($id);

        if ($service->image) {
            \Storage::disk('public')->delete($service->image);
        }

        $deleted = $service->delete();

        if ($deleted) {
            session()->flash('success', 'Service Deleted Successfully');
        } else {
            session()->flash('error', 'Service could not be deleted successfully');
        }

        return redirect(route('admin/services'));
    }
 
    public function update(Request $request, $id)
    {
        $services = Service::findOrFail($id);

        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $services->title = $validation['title'];
        $services->category = $validation['category'];
        $services->body = $validation['body'];

        if ($request->hasFile('image')) {
            if ($services->image) {
                \Storage::disk('public')->delete($services->image);
            }

            $imagePath = $request->file('image')->store('uploads', 'public');
            $services->image = $imagePath;
        }

        $data = $services->save();
        if ($data) {
            session()->flash('success', 'Service Updated Successfully');
            return redirect(route('admin/services'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/services/update', $services->id));
        }
    }
}