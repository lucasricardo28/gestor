<?php

namespace App\Http\Controllers;

use App\Entities\PublicTarget;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\InstitutionsCreateRequest;
use App\Http\Requests\InstitutionsUpdateRequest;
use App\Repositories\InstitutionsRepository;
use App\Validators\InstitutionsValidator;

/**
 * Class InstitutionsController.
 *
 * @package namespace App\Http\Controllers;
 */
class InstitutionsController extends Controller
{
    /**
     * @var InstitutionsRepository
     */
    protected $repository;

    /**
     * @var InstitutionsValidator
     */
    protected $validator;

    /**
     * InstitutionsController constructor.
     *
     * @param InstitutionsRepository $repository
     * @param InstitutionsValidator $validator
     */
    public function __construct(InstitutionsRepository $repository, InstitutionsValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $institutions = $this->repository->all();

        $publicTargets = PublicTarget::all()->pluck('name','id');

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $institutions,
            ]);
        }

        return view('institutions.index', compact('institutions','publicTargets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  InstitutionsCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(InstitutionsCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $institution = $this->repository->create($request->all());

            $response = [
                'message' => 'Institutions created.',
                'data'    => $institution->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institution = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $institution,
            ]);
        }

        return view('institutions.show', compact('institution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institution = $this->repository->find($id);

        $publicTargets = PublicTarget::all()->pluck('name','id');

        return view('institutions.edit', compact('institution','publicTargets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  InstitutionsUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(InstitutionsUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $institution = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Institutions updated.',
                'data'    => $institution->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->route('institutions.index')->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Institutions deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Institutions deleted.');
    }
}
