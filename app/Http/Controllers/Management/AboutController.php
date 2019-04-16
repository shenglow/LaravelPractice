<?php

namespace laravelPractice\Http\Controllers\Management;

use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;
use laravelPractice\Models\About;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::find(1);
        if (empty($about))
            return view('management.about.edit');
        else
            return view('management.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        if (!file_exists('uploads/about')) {
            mkdir('uploads/about', 0755, true);
        }

        $about = About::find(1);
        if (empty($about)) {
            $about = new About;
            $fileName = 'default.jpg';
        }

        if ($request->hasFile('image')) {
            if ($about->image != 'default.jpg') @unlink('uploads/about/'.$about->image);
            $file = $request->file('image');
            $path = public_path().'\uploads\about\\';
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }

        $about->content = $request->input('content');
        if ($fileName) $about->image = $fileName;

        $about->save();

        return redirect()->route('admin.about.edit');
    }
}