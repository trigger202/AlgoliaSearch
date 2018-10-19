<?php

  namespace App\Http\Controllers;

  use App\Person;
  use App\Services\AlgoliaSearch;
  use Illuminate\Http\Request;

  class PeopleController extends Controller
  {


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('search');
    }


    /**
     * @param Request $request
     * @param AlgoliaSearch $search
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function searchPerson(Request $request, AlgoliaSearch $search)
    {

      return $search->index('people_index')->get($request->get('actor'))['hits'];
    }
  }
