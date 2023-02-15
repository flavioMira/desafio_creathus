<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Validation\Rule;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'birth_date',
        'nacionality',
        'birth_uf',
        'birth_city',
        'sex',
        'level',
        'telphone',
        'picture',
        'role',
    ];

    public function rules(){
        return [
            'name' => ['required',],
            'email' => ['required', Rule::unique('users')->ignore($this->id)],
            'password' =>'required',
            'surname' => 'required',
            'birth_date' => 'required',
            'nacionality' => '',
            'birth_uf' => 'alpha|min:2|max:2',
            'birth_city' => '',
            'sex' => '',
            'level' => 'numeric',
            'telphone' => 'numeric',
        ];
    }

    public function feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório',
            'numeric' => 'O valor do campo :attribute pode conter apenas valores numericos',
            'alpha' => 'O valor do campo :attribute pode contar apenas letras',
            'email.unique' => 'O email informado já foi cadastrado antes',
            'birth_uf.max' => 'O campo tem que ter 2 letras',
            'birth_uf.min' => 'O campo tem que ter 2 letras',
        ];
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
