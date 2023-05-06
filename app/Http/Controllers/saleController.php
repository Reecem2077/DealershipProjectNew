<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesaleRequest;
use App\Http\Requests\UpdatesaleRequest;
use App\Repositories\saleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Customer as Customer;



class saleController extends AppBaseController
{
    /** @var saleRepository $saleRepository*/
    private $saleRepository;

    public function __construct(saleRepository $saleRepo)
    {
        $this->saleRepository = $saleRepo;
    }

    /**
     * Display a listing of the sale.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sales = $this->saleRepository->all();

        return view('sales.index')
            ->with('sales', $sales);
    }

    /**
     * Show the form for creating a new sale.
     *
     * @return Response
     */
    public function create()
    {
       //Find all members from the DB and return as an array of Member.php objects
		 $customers = Customer::all();
		 //Find all courts from the DB and return as an array of Court.php objects
		 
		 //return the bookings.create view with $members and $courts as view variables
		 return view('sales.create')->with('customers',$customers);

    }

    /**
     * Store a newly created sale in storage.
     *
     * @param CreatesaleRequest $request
     *
     * @return Response
     */
    public function store(CreatesaleRequest $request)
    {
        $input = $request->all();

        $sale = $this->saleRepository->create($input);

        Flash::success('Sale saved successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Display the specified sale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        return view('sales.show')->with('sale', $sale);
    }

    /**
     * Show the form for editing the specified sale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        return view('sales.edit')->with('sale', $sale);
    }

    /**
     * Update the specified sale in storage.
     *
     * @param int $id
     * @param UpdatesaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesaleRequest $request)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        $sale = $this->saleRepository->update($request->all(), $id);

        Flash::success('Sale updated successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Remove the specified sale from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        $this->saleRepository->delete($id);

        Flash::success('Sale deleted successfully.');

        return redirect(route('sales.index'));
    }
}
