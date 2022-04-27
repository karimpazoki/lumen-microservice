<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * returns a list of all authors' information
     *
     * @return App\Models\Author[]
     */
    public function index()
    {
        # code...
    }

    /**
     * Returns an author's information
     *
     * @param int author
     *
     * @return App\Models\Author
     */
    public function show($author)
    {
        # code...
    }

    /**
     * Stores new author's information
     *
     * @param Illuminate\Http\Request $request
     *
     * @return App\Models\Author
     */
    public function store(Request $request)
    {
        # code...
    }

    /**
     * Updates an existing author's information
     *
     * @param Illuminate\Http\Request $request
     * @param int author
     *
     * @return App\Models\Author
     */
    public function update(Request $request, $author)
    {
        # code...
    }

    /**
     * Removes an existing author
     *
     * @param int author
     *
     * @return App\Models\Author
     */
    public function delete($author)
    {
        # code...
    }
}
