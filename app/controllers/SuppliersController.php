<?php

class SuppliersController extends BaseController {

		/*
		try{
		        $db = DB::connection()->getPdo();
        	    $query = $db->prepare('SELECT * FROM users WHERE id = :user_id');
	            $query->bindValue(':user_id', '1');
				$query->execute(); 
				return $query->fetchAll(PDO::FETCH_ASSOC); 

		} catch(Exception $e){
			echo $e; 
		}
		*/
	public function index() {

		$suppliers = Supplier::all(); 
		
		return View::make('admin.suppliers.list_all', array('suppliers' => $suppliers)); 	

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create_new()
	{
		return View::make('admin.suppliers.create_supplier_form'); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "show supplier with id: $id"; 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "edit supplier with id: $id"; 
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
		return "About to delete $id"; 
	}

}
