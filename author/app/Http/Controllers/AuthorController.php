<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Author;
use App\Traits\ResponseBuilder;

class AuthorController extends Controller
{
    use ResponseBuilder;
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
        return $this->success(Author::all());
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
        return $this->success(Author::findOrFail($author));
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
        return $this->success(Author::create($request->all()), "The author created successfully", Response::HTTP_CREATED);
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
        $author = Author::findOrFail($author);
        $author->fill($request->all());
        $author->save();
        return $this->success($author, "The author updated successfully", Response::HTTP_OK);
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
        $author = Author::findOrFail($author);
        $author->delete();
        return $author;
        return $this->success($author, "The author deleted successfully", Response::HTTP_OK);
    }
}
