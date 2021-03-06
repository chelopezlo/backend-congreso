<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUserActivityAPIRequest;
use App\Http\Requests\API\UpdateUserActivityAPIRequest;
use App\Models\UserActivity;
use App\Repositories\UserActivityRepository;
use App\Models\ActivitySchedule;
use App\Repositories\ActivityRepository;
use App\Repositories\ActivityScheduleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class UserActivityController
 * @package App\Http\Controllers\API
 */

class UserActivityAPIController extends AppBaseController
{
    /** @var  UserActivityRepository */
    private $userActivityRepository;
    
    /** @var  activityScheduleRepository */
    private $activityScheduleRepository;

    private $activityRepository;
    

    public function __construct(UserActivityRepository $userActivityRepo, ActivityRepository $activityRepo, ActivityScheduleRepository $activityScheduleRepo)
    {
        $this->userActivityRepository = $userActivityRepo;
        $this->activityScheduleRepository = $activityScheduleRepo;
        $this->activityRepository = $activityRepo;        
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/userActivities",
     *      summary="Get a listing of the UserActivities.",
     *      tags={"UserActivity"},
     *      description="Get all UserActivities",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/UserActivity")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->userActivityRepository->pushCriteria(new RequestCriteria($request));
        $this->userActivityRepository->pushCriteria(new LimitOffsetCriteria($request));
        $userActivities = $this->userActivityRepository->all();

        return $this->sendResponse($userActivities->toArray(), 'User Activities retrieved successfully');
    }

    /**
     * @param CreateUserActivityAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/userActivities",
     *      summary="Store a newly created UserActivity in storage",
     *      tags={"UserActivity"},
     *      description="Store UserActivity",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="UserActivity that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/UserActivity")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/UserActivity"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateUserActivityAPIRequest $request)
    {
        $input = $request->all();

        $userActivities = $this->userActivityRepository->create($input);

        return $this->sendResponse($userActivities->toArray(), 'User Activity saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/userActivities/{id}",
     *      summary="Display the specified UserActivity",
     *      tags={"UserActivity"},
     *      description="Get UserActivity",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of UserActivity",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/UserActivity"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var UserActivity $userActivity */
        $userActivity = $this->userActivityRepository->find($id);

        if (empty($userActivity)) {
            return $this->sendError('User Activity not found');
        }

        return $this->sendResponse($userActivity->toArray(), 'User Activity retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateUserActivityAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/userActivities/{id}",
     *      summary="Update the specified UserActivity in storage",
     *      tags={"UserActivity"},
     *      description="Update UserActivity",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of UserActivity",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="UserActivity that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/UserActivity")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/UserActivity"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateUserActivityAPIRequest $request)
    {
        $input = $request->all();

        /** @var UserActivity $userActivity */
        $userActivity = $this->userActivityRepository->find($id);

        if (empty($userActivity)) {
            return $this->sendError('User Activity not found');
        }

               
        $userActivity = $this->userActivityRepository->update($input, $id);
        

        //Si la actividad seleccionada es la INSCRIPCION
        if($userActivity->activity_id == 1)
        {
            //Insertar todas las actividades de almuerzo y traslado para la persona.
            $activities = $this->activityRepository->findWhereIn('activity_type_id', [1,4]);
            $activities->load('ActivitySchedule');

            foreach ($activities as $act)
            {
                foreach ($act->ActivitySchedule as $schedule)
                {
                    $userActivities = $this->userActivityRepository->
                            create([
                                'is_registered' => 0, 
                                'persona_id' => $userActivity->persona_id, 
                                'activity_id' => $act->id,
                                'activity_schedule_id' => $schedule->id]);
                }
            }
        }

        return $this->sendResponse($userActivity->toArray(), 'UserActivity updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/userActivities/{id}",
     *      summary="Remove the specified UserActivity from storage",
     *      tags={"UserActivity"},
     *      description="Delete UserActivity",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of UserActivity",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var UserActivity $userActivity */
        $userActivity = $this->userActivityRepository->find($id);

        if (empty($userActivity)) {
            return $this->sendError('User Activity not found');
        }

        $userActivity->delete();

        return $this->sendResponse($id, 'User Activity deleted successfully');
    }
}
