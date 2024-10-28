<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Business;
 
class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::orderBy('id', 'desc')->get();
        $total = Business::count();
        return view('admin.business.home', compact(['businesses', 'total']));
    }
 
    public function create()
    {
        return view('admin.business.create');
    }
 
    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'nullable',
            'url_type' => 'required',
            'url' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        $data = Business::create([
            'title' => $validation['title'],
            'body' => $validation['body'],
            'url_type' => $validation['url_type'],
            'url' => $validation['url'],
            'image' => $imagePath,
        ]);

        if ($data) {
            session()->flash('success', 'New Business Added Successfully');
            return redirect(route('admin/businesses'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.businesses/create'));
        }
    }

    public function edit($id)
    {
        $businesses = Business::findOrFail($id);
        return view('admin.business.update', compact('businesses'));
    }
 
    public function delete($id)
    {
        $service = Business::findOrFail($id);

        if ($service->image) {
            \Storage::disk('public')->delete($service->image);
        }

        $deleted = $service->delete();

        if ($deleted) {
            session()->flash('success', 'Business Deleted Successfully');
        } else {
            session()->flash('error', 'Business could not be deleted successfully');
        }

        return redirect(route('admin/businesses'));
    }
 
    public function update(Request $request, $id)
    {
        $businesses = Business::findOrFail($id);

        $validation = $request->validate([
            'title' => 'required',
            'body' => 'nullable',
            'url_type' => 'required',
            'url' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $businesses->title = $validation['title'];
        $businesses->body = $validation['body'];
        $businesses->url_type = $validation['url_type'];
        $businesses->url = $validation['url'];

        if ($request->hasFile('image')) {
            if ($businesses->image) {
                \Storage::disk('public')->delete($businesses->image);
            }

            $imagePath = $request->file('image')->store('uploads', 'public');
            $businesses->image = $imagePath;
        }

        $data = $businesses->save();
        if ($data) {
            session()->flash('success', 'Business Updated Successfully');
            return redirect(route('admin/businesses'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/businesses/update', $businesses->id));
        }
    }
}