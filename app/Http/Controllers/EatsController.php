<?php namespace Gocompose\Foodbag\Http\Controllers;

use Gocompose\Foodbag\Contracts\Repositories\EatsRepositoryInterface;
use Gocompose\Foodbag\Http\Requests;
use Gocompose\Foodbag\Http\Controllers\Controller;

use Gocompose\Foodbag\Models\Eat;
use Illuminate\Http\Request;

class EatsController extends Controller {

    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EatsRepositoryInterface $repository)
    {
        $this->repository = $repository;

        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = \Auth::user();
dd($user->eats);
        //dd($this->repository->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreateEatRequest $request)
	{

        $user = \Auth::user();

        $eat = new Eat();
        $eat['food_id'] = $request->input('food_id');
        $eat['eaten'] = $request->input('eaten');
        $eat['amount'] = $request->input('amount');
        $eat['amount_type'] = $request->input('amount_type');

        $user->eats()->save($eat);

        return redirect()->back()->withSuccess("Eat added");

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
