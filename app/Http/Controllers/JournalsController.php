<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJournalsRequest;
use App\Http\Requests\UpdateJournalsRequest;
use App\Repositories\JournalsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JournalsController extends AppBaseController
{
    /** @var JournalsRepository $journalsRepository*/
    private $journalsRepository;

    public function __construct(JournalsRepository $journalsRepo)
    {
        $this->journalsRepository = $journalsRepo;
    }

    /**
     * Display a listing of the Journals.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $journals = $this->journalsRepository->all();

        return view('journals.index')
            ->with('journals', $journals);
    }

    /**
     * Show the form for creating a new Journals.
     *
     * @return Response
     */
    public function create()
    {
        return view('journals.create');
    }

    /**
     * Store a newly created Journals in storage.
     *
     * @param CreateJournalsRequest $request
     *
     * @return Response
     */
    public function store(CreateJournalsRequest $request)
    {
        $input = $request->all();

        $journals = $this->journalsRepository->create($input);

        Flash::success('Journals saved successfully.');

        return redirect(route('journals.index'));
    }

    /**
     * Display the specified Journals.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $journals = $this->journalsRepository->find($id);

        if (empty($journals)) {
            Flash::error('Journals not found');

            return redirect(route('journals.index'));
        }

        return view('journals.show')->with('journals', $journals);
    }

    /**
     * Show the form for editing the specified Journals.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $journals = $this->journalsRepository->find($id);

        if (empty($journals)) {
            Flash::error('Journals not found');

            return redirect(route('journals.index'));
        }

        return view('journals.edit')->with('journals', $journals);
    }

    /**
     * Update the specified Journals in storage.
     *
     * @param int $id
     * @param UpdateJournalsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJournalsRequest $request)
    {
        $journals = $this->journalsRepository->find($id);

        if (empty($journals)) {
            Flash::error('Journals not found');

            return redirect(route('journals.index'));
        }

        $journals = $this->journalsRepository->update($request->all(), $id);

        Flash::success('Journals updated successfully.');

        return redirect(route('journals.index'));
    }

    /**
     * Remove the specified Journals from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $journals = $this->journalsRepository->find($id);

        if (empty($journals)) {
            Flash::error('Journals not found');

            return redirect(route('journals.index'));
        }

        $this->journalsRepository->delete($id);

        Flash::success('Journals deleted successfully.');

        return redirect(route('journals.index'));
    }
}
