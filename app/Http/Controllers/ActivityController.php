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
            'body' => 'required',
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
        $activities = Activity::findOrFail($id)->delete();
        if ($activities) {
            session()->flash('success', 'Activity Deleted Successfully');
            return redirect(route('admin/activities/'));
        } else {
            session()->flash('error', 'Activity Not Delete successfully');
            return redirect(route('admin/activities/'));
        }
    }
 
    public function update(Request $request, $id)
    {
        $activities = Activity::findOrFail($id);
        $title = $request->title;
        $body = $request->body;
        $image = $request->image;
 
        $activities->title = $title;
        $activities->body = $body;
        $activities->image = $image;
        $data = $activities->save();
        if ($data) {
            session()->flash('success', 'Activity Update Successfully');
            return redirect(route('admin/activities'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/activities/update'));
        }
    }
}