<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEducationsRequest;
use App\Http\Requests\UpdateEducationsRequest;
use App\Repositories\EducationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EducationsController extends AppBaseController
{
    /** @var EducationsRepository $educationsRepository*/
    private $educationsRepository;

    public function __construct(EducationsRepository $educationsRepo)
    {
        $this->educationsRepository = $educationsRepo;
    }

    /**
     * Display a listing of the Educations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $educations = $this->educationsRepository->all();

        return view('educations.index')
            ->with('educations', $educations);
    }

    /**
     * Show the form for creating a new Educations.
     *
     * @return Response
     */
    public function create()
    {
        return view('educations.create');
    }

    /**
     * Store a newly created Educations in storage.
     *
     * @param CreateEducationsRequest $request
     *
     * @return Response
     */
    public function store(CreateEducationsRequest $request)
    {
        $input = $request->all();

        $educations = $this->educationsRepository->create($input);

        Flash::success('Educations saved successfully.');

        return redirect(route('educations.index'));
    }

    /**
     * Display the specified Educations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $educations = $this->educationsRepository->find($id);

        if (empty($educations)) {
            Flash::error('Educations not found');

            return redirect(route('educations.index'));
        }

        return view('educations.show')->with('educations', $educations);
    }

    /**
     * Show the form for editing the specified Educations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $educations = $this->educationsRepository->find($id);

        if (empty($educations)) {
            Flash::error('Educations not found');

            return redirect(route('educations.index'));
        }

        return view('educations.edit')->with('educations', $educations);
    }

    /**
     * Update the specified Educations in storage.
     *
     * @param int $id
     * @param UpdateEducationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEducationsRequest $request)
    {
        $educations = $this->educationsRepository->find($id);

        if (empty($educations)) {
            Flash::error('Educations not found');

            return redirect(route('educations.index'));
        }

        $educations = $this->educationsRepository->update($request->all(), $id);

        Flash::success('Educations updated successfully.');

        return redirect(route('educations.index'));
    }

    /**
     * Remove the specified Educations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $educations = $this->educationsRepository->find($id);

        if (empty($educations)) {
            Flash::error('Educations not found');

            return redirect(route('educations.index'));
        }

        $this->educationsRepository->delete($id);

        Flash::success('Educations deleted successfully.');

        return redirect(route('educations.index'));
    }
}
