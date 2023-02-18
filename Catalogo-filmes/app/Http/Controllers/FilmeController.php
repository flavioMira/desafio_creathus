<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Filme;
use App\Http\Requests\StoreFilmeRequest;
use App\Http\Requests\UpdateFilmeRequest;

class FilmeController extends Controller
{
    public function __construct(Filme $filme){
        $this->filme = $filme;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filme = $this->filme->latest()->paginate(12);
        return response()->json($filme, 200);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFilmeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilmeRequest $request)
    {
        
        $request->validate($this->filme->rules(), $this->filme->feedback());

        $img = $request->file('thumbnail');
        $img_urn = $img->store('img/thumbnails','public');
        $img_fundo = $request->file('background');
        $img_fundo_urn = $img_fundo->store('img/backgrounds','public');

        $filme = $this->filme->create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'category' => $request->category,
            'year' => $request->year,
            'duration' => $request->duration,
            'thumbnail' => $img_urn,
            'background' => $img_fundo_urn,
        ]);
        return response()->json($filme, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filme = $this->filme->find($id);

        if( $filme === null){
            return response()->json([ "erro" => "O filme Pesquisado não existe" ], 404);
        }

        return response()->json($filme, 200);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilmeRequest  $request
     * @param  integer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmeRequest $request, $id)
    {
        $filme = $this->filme->find($id);
        
        if( $filme === null){
            return response()->json([ "erro" => "Impossível atualizar, o filme solicitado não existe" ], 404);
        }

        if($request->method() === 'PATCH'){
            $regrasDinamicas = array();

            foreach($filme->rules() as $input => $regra){
                if(array_key_exists($input, $request->all())){
                    $regrasDinamicas[$input] = $regra;
                }
            }

            $request->validate($regrasDinamicas,$filme->feedback());

        } else{
          
            $request->validate($filme->rules(),$filme->feedback());
        
        }

        if($request->file('thumbnail')) {
            Storage::disk('public')->delete($filme->thumbnail);
        }
        if($request->file('background')) {
            Storage::disk('public')->delete($filme->background);
        }
        
        $img = $request->file('thumbnail');
        $img_urn = $img->store('img/thumbnails','public');
        $img_fundo = $request->file('background');
        $img_fundo_urn = $img_fundo->store('img/backgrounds','public');

        $filme->fill($request->all());
        $filme->thumbnail = $img_urn;
        $filme->background = $img_fundo_urn;

        $filme->save();

        
        return response()->json($filme, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filme = $this->filme->find($id);

        if( $filme === null){
            return response()->json([ "erro" => "Impossível deletar, o filme solicitado não existe"], 404);
        }

        
        Storage::disk('public')->delete($filme->thumbnail);
        Storage::disk('public')->delete($filme->background);

        $filme->delete();
        return response()->json(["msg" => "O Filme foi excluído com sucesso!"], 200);
    }
}
