<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PublicCreateRequest;
use App\Http\Requests\PublicUpdateRequest;
use App\Repositories\PublicRepository;
use App\Validators\PublicValidator;

/**
 * Class PublicsController.
 *
 * @package namespace App\Http\Controllers;
 */
class PublicsController extends Controller
{
    /**
     * @var PublicRepository
     */
    protected $repository;

    /**
     * @var PublicValidator
     */
    protected $validator;

    /**
     * PublicsController constructor.
     *
     * @param PublicRepository $repository
     * @param PublicValidator $validator
     */
    public function __construct(PublicRepository $repository, PublicValidator $validator)
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
        $publics = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $publics,
            ]);
        }

        return view('publics.index', compact('publics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PublicCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PublicCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $public = $this->repository->create($request->all());

            $response = [
                'message' => 'Public created.',
                'data'    => $public->toArray(),
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
        $public = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $public,
            ]);
        }

        return view('publics.show', compact('public'));
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
        $public = $this->repository->find($id);

        return view('publics.edit', compact('public'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PublicUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PublicUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $public = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Public updated.',
                'data'    => $public->toArray(),
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
                'message' => 'Public deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Public deleted.');
    }
}
