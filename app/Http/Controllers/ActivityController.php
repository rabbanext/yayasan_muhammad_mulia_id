<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Activity;
 
class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('id', 'desc')->get();
        $total = Activity::count();
        return view('admin.Activity.home', compact(['activities', 'total']));
    }
 
    public function create()
    {
        return view('admin.Activity.create');
    }
 
    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        $data = Activity::create([
            'title' => $validation['title'],
            'body' => $validation['body'],
            'image' => $imagePath,
        ]);

        if ($data) {
            session()->flash('success', 'Activity Added Successfully');
            return redirect(route('admin/activities'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.activities/create'));
        }
    }

    public function edit($id)
    {
        $activities = Activity::findOrFail($id);
        return view('admin.Activity.update', compact('activities'));
    }
 
    public function delete($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->image) {
            \Storage::disk('public')->delete($activity->image);
        }

        $deleted = $activity->delete();

        if ($deleted) {
            session()->flash('success', 'Activity Deleted Successfully');
        } else {
            session()->flash('error', 'Activity could not be deleted successfully');
        }

        return redirect(route('admin/activities'));
    }
 
    public function update(Request $request, $id)
    {
        $activities = Activity::findOrFail($id);

        $validation = $request->validate([
            'title' => 'required',
            'body' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $activities->title = $validation['title'];
        $activities->body = $validation['body'];

        if ($request->hasFile('image')) {
            if ($activities->image) {
                \Storage::disk('public')->delete($activities->image);
            }

            $imagePath = $request->file('image')->store('uploads', 'public');
            $activities->image = $imagePath;
        }

        $data = $activities->save();
        if ($data) {
            session()->flash('success', 'Activity Updated Successfully');
            return redirect(route('admin/activities'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/activities/update', $activities->id));
        }
    }
}