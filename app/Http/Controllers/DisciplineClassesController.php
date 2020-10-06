<?php

namespace App\Http\Controllers;

use App\Discipline;
use Illuminate\Http\Request;

class DisciplineClassesController extends Controller
{
    public function __construct(Discipline $discipline)
    {
        $this->discipline = $discipline;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listValids($id)
    {
        if ($this->discipline->where('id', $id)->exists()) {

            $discipline = $this->discipline->where('id', $id)->first();
            if ($discipline->valids()->get()->count() > 0) {
                $remoteclass = $discipline->valids()->get();
                return response()->json([
                    'data' => $remoteclass,
                    'status' => 200
                ]);
            } else {
                return response()->json([
                    'data' => 'This course has no remote classes',
                    'status' => 200
                ]);
            }
        } else {
            return response()->json(['message' => 'Data not found', 'status' => 200]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(['message' => 'New features coming soon', 'code' => 200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function show(Discipline $discipline)
    {
        return response()->json(['message' => 'New features coming soon', 'code' => 200]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discipline $discipline)
    {
        return response()->json(['message' => 'New features coming soon', 'code' => 200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discipline $discipline)
    {
        return response()->json(['message' => 'New features coming soon', 'code' => 200]);
    }
}