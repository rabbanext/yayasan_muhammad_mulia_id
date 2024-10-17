<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Program;
 
class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::orderBy('id', 'desc')->get();
        $total = Program::count();
        return view('admin.Program.home', compact(['programs', 'total']));
    }
 
    public function create()
    {
        return view('admin.Program.create');
    }
 
    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        $data = Program::create([
            'title' => $validation['title'],
            'category' => $validation['category'],
            'body' => $validation['body'],
            'image' => $imagePath,
        ]);

        if ($data) {
            session()->flash('success', 'Program Added Successfully');
            return redirect(route('admin/programs'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.programs/create'));
        }
    }

    public function edit($id)
    {
        $programs = Program::findOrFail($id);
        return view('admin.Program.update', compact('programs'));
    }
 
    public function delete($id)
    {
        $program = Program::findOrFail($id);

        if ($program->image) {
            \Storage::disk('public')->delete($program->image);
        }

        $deleted = $program->delete();

        if ($deleted) {
            session()->flash('success', 'Program Deleted Successfully');
        } else {
            session()->flash('error', 'Program could not be deleted successfully');
        }

        return redirect(route('admin/programs'));
    }
 
    public function update(Request $request, $id)
    {
        $programs = Program::findOrFail($id);

        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $programs->title = $validation['title'];
        $programs->category = $validation['category'];
        $programs->body = $validation['body'];

        if ($request->hasFile('image')) {
            if ($programs->image) {
                \Storage::disk('public')->delete($programs->image);
            }

            $imagePath = $request->file('image')->store('uploads', 'public');
            $programs->image = $imagePath;
        }

        $data = $programs->save();
        if ($data) {
            session()->flash('success', 'Program Updated Successfully');
            return redirect(route('admin/programs'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/programs/update', $programs->id));
        }
    }
}