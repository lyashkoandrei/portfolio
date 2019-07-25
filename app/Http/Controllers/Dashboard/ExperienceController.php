<?php

namespace App\Http\Controllers\Dashboard;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Http\Requests\ExperienceRequest;
use App;

class ExperienceController extends Controller
{
    public function index()
    {
        //App::setLocale($lang);
        $experience = Experience::All();
        return view('dashboard.experience.experience', [
            'experience' =>$experience
        ]);
    }
    /**public function update(ExperienceRequest $request)
    {
        $data = $request->all();
        Experience::All()->update($data);

        return redirect()->route('experience');
    }**/
    public function edit($id)
    {
        $experience = Experience::find($id);
        return view('dashboard.experience.edit', ['experience' => $experience]);
    }
    public function update(ExperienceRequest $request, $id)
    {
        $data = $request ->all();

        Experience::find($id)->update($data);

        return redirect('/dashboard/experience');
    }

    //создание
    public function create()
    {
        return view('dashboard.experience.create');
    }

    //сохранение созданного
    public function store(ExperienceRequest $request)
    {
        $data = $request ->all();

        Experience::create($data);

        return redirect('/dashboard/experience');
    }
}
