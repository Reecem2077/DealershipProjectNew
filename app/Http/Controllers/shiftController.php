<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateshiftRequest;
use App\Http\Requests\UpdateshiftRequest;
use App\Repositories\shiftRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class shiftController extends AppBaseController
{
    /** @var shiftRepository $shiftRepository*/
    private $shiftRepository;

    public function __construct(shiftRepository $shiftRepo)
    {
        $this->shiftRepository = $shiftRepo;
    }

    /**
     * Display a listing of the shift.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shifts = $this->shiftRepository->all();

        return view('shifts.index')
            ->with('shifts', $shifts);
    }

    /**
     * Show the form for creating a new shift.
     *
     * @return Response
     */
    public function create()
    {
        return view('shifts.create');
    }

    /**
     * Store a newly created shift in storage.
     *
     * @param CreateshiftRequest $request
     *
     * @return Response
     */
    public function store(CreateshiftRequest $request)
    {
        $input = $request->all();

        $shift = $this->shiftRepository->create($input);

        Flash::success('Shift saved successfully.');

        return redirect(route('shifts.index'));
    }

    /**
     * Display the specified shift.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        return view('shifts.show')->with('shift', $shift);
    }

    /**
     * Show the form for editing the specified shift.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        return view('shifts.edit')->with('shift', $shift);
    }

    /**
     * Update the specified shift in storage.
     *
     * @param int $id
     * @param UpdateshiftRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateshiftRequest $request)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        $shift = $this->shiftRepository->update($request->all(), $id);

        Flash::success('Shift updated successfully.');

        return redirect(route('shifts.index'));
    }

    /**
     * Remove the specified shift from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('shifts.index'));
        }

        $this->shiftRepository->delete($id);

        Flash::success('Shift deleted successfully.');

        return redirect(route('shifts.index'));
    }
}
