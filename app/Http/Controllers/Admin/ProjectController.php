<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $regoleValidazione = [
            'title' => 'required|unique:projects|max:50',
            'relase_date' => 'required|date',
            'description' => 'required',
    ];
    protected $messaggiValidazione = [
            'title.required' => 'il campo è obbligatorio',
            'title.unique' => 'il campo con questa voce esiste già',
            'title.max' => 'il campo non può contenere più di 50 caratteri',
            'relase_date.required' => 'il campo è obbligatorio',
            'relase_date.date' => 'il campo deve contenere una data valida',
            'description.required' => 'il campo è obbligatorio',
        ];



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::paginate(10);

        return view('admin.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->regoleValidazione,$this->messaggiValidazione);

        $newProject = new Project();
        $newProject->fill($data);
        $newProject->save();

        return redirect()->route('admin.project.show',$newProject->id)->with('message',"l'elemento è stato creato correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        // $project = Project::findOrFail($id);

        return view('admin.show',compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // $project = Project::findOrFail($id);

        return view('admin.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        // $project = Project::findOrFail($id);

        $regoleDaAggiornare = $this->regoleValidazione;

        $regoleDaAggiornare['title'] = ['required',Rule::unique('projects')->ignore($project->id),'max:50'];
        
        $data = $request->validate($regoleDaAggiornare,$this->messaggiValidazione);
        
        $project->update($data);

        return redirect()->route('admin.project.show', $project->id)->with('message', "l'elemento è stato modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        // $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route('admin.project.index')->with('message', "l'elemento è stato eliminato correttamente");

    }
}
