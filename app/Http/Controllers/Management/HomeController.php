<?php

namespace laravelPractice\Http\Controllers\Management;

use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;
use laravelPractice\Models\Home;

class HomeController extends Controller
{
    public function edit()
    {
        $home = Home::find(1);
        if (empty($home))
            return view('management.home.edit');
        else
            return view('management.home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        if (!file_exists('uploads/home')) {
            mkdir('uploads/home', 0755, true);
        }
        
        $home = Home::find(1);
        if (empty($home)) {
            $home = new Home;
            $fileName = 'default.jpg';
        }

        if ($request->hasFile('image')) {
            if ($home->image != 'default.jpg') @unlink('uploads/home/'.$home->image);
            $file = $request->file('image');
            $path = public_path().'\uploads\home\\';
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }

        $home->title = $request->input('title');
        $home->content = $request->input('content');
        if (isset($fileName)) {
            $home->image = $fileName;
        }
        $home->save();

        return redirect()->route('admin.home.edit');
    }
}