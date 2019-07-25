<?php

namespace App\Http\Controllers\Dashboard;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;
//use App\Http\Requests\SkillsRequest;
use App;

class SkillsController extends Controller
{
    public function index()
    {
        //App::setLocale($lang);
        $skills = Skill::All();
        return view('dashboard.skills.skills', [
            'skills' =>$skills
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
