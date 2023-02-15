<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $userRepository = new userRepository($this->user);



        if ($request->has('filter')) {

            $userRepository->filter($request->get('filter'));
        }

        if ($request->has('attributes')) {

            $userRepository->selectAttributes($request->get('attributes'));
        }

        if ($request->has('attributes_child')) {
            $userRepository->selectChild($request->get('attributes_child'));
        }

        return response()->json($userRepository->getResultado(), 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  integer  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $userRepository = new userRepository($this->user);

        $user = $userRepository->findId($id);

        if ($user === null) {

            return response()->json(['msg' => 'Nenhum registro encontrado'], 404);
        }
        return response()->json($user, 200);
    }
}
