<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\HTTP\Requests\AboutRequest;
use App;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::find(1);
        return view('dashboard.about.edit', [
            'about' =>$about
        ]);
    }
    public function update(AboutRequest $request)
    {
        $data = $request->all();
        About::find(1)->update($data);

        return redirect()->route('about');
    }
}
