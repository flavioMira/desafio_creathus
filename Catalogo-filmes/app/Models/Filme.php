<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'description',
        'category',
        'year',
        'duration',
        'thumbnail',
        'background',
    ];

    public function rules(){
        return [
            'title' => 'required|unique:filmes,title,'.$this->id.'',
            'author' => 'required',
            'description' => 'required',
            'category' => 'required',
            'year' => 'required',
            'duration' => 'required',
            'thumbnail' => 'required|file|mimes:png,jpeg,jpg',
            'background' => 'required|file|mimes:png,jpeg,jpg',
        ];
    }

    public function feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório',
            'unique' => 'Já existe um filme com esse nome',
            'thumbnail' => 'O arquivo precisa ser uma imagem png',
            'background' => 'O arquivo precisa ser uma imagem png',
        ];
    }
}
