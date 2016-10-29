<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;
use App\Repositories\PersonaRepository;
use App\Models\UserActivity;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PersonaController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $personaRepository;

    public function __construct(PersonaRepository $personaRepo)
    {
        $this->personaRepository = $personaRepo;
    }

    /**
     * Display a listing of the Persona.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->personaRepository->pushCriteria(new RequestCriteria($request));
        $personas = $this->personaRepository->all();

        return view('personas.index')
            ->with('personas', $personas);
    }
    
     /**
     * Display a listing of the Persona.
     *
     * @param Request $request
     * @return Response
     */
    public function search(Request $request)
    {
        $this->personaRepository->pushCriteria(new RequestCriteria($request));
        $q = $request->get('q');
        $where = array(
            ['rut', 'like', "%$q%"],        
            ['full_name', 'like', "%$q%"],       
            ['code', 'like', "%$q%"]
        );
        $personas = $this->personaRepository->findOrWhere($where);

        return view('personas.index')
            ->with('personas', $personas);
    }
    
        /**
     * Show the form for creating a new Persona.
     *
     * @return Response
     */
    public function searchForm()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new Persona.
     *
     * @return Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created Persona in storage.
     *
     * @param CreatePersonaRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonaRequest $request)
    {
        $input = $request->all();

        app('App\Http\Controllers\PrintReportContoller')->getPrintReport();
        
        $user = Illuminate\Foundation\Auth\User::create([
            'name' => $input['full_name'],
            'email' => $input['email'],
            'password' => bcrypt($input['rut']),
        ]);
        
        
        $input['user_id'] = 1;//$user['id'];
        $persona = $this->personaRepository->create($input);

        Flash::success('Persona saved successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Display the specified Persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        return view('personas.show')->with('persona', $persona);
    }

    /**
     * Show the form for editing the specified Persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        return view('personas.edit')->with('persona', $persona);
    }

    /**
     * Update the specified Persona in storage.
     *
     * @param  int              $id
     * @param UpdatePersonaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonaRequest $request)
    {
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $persona = $this->personaRepository->update($request->all(), $id);
        
        $persona->load('UserActivity');
        
        if($persona->UserActivity->contains('activity_id', 1) == FALSE)
        {
            $usAc = new UserActivity;
            $usAc->is_registered = 0;
            $usAc->persona_id = $persona->id;
            $usAc->activity_id = 1;
            $usAc->activity_schedule_id = 1;
            $usAc->save();
        }

        Flash::success('Persona updated successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Remove the specified Persona from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $this->personaRepository->delete($id);

        Flash::success('Persona deleted successfully.');

        return redirect(route('personas.index'));
    }
}
