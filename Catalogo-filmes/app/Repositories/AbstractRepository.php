<?php 

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

class AbstractRepository{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findId($id){
        $this->model = $this->model->find($id);
        return $this->model;
    }
    
    public function filter($conditions){
        $filter = explode(':', $conditions);
        $this->model = $this->model->where($filter[0], $filter[1], $filter[2]);
    }

    public function selectAttributes($attributes){
        $this->model = $this->model->selectRaw($attributes);
    }

    public function selectChild($child){
        $parameters = explode(':', $child);
        $name=$parameters[0];
        $attributes=$parameters[1];
        $this->model = $this->model->with($name.':'.$attributes);
    }

    public function getResultado(){
        return $this->model->get();
    }

    
    public function getAll(){
        $this->model =  $this->model->all();
        return $this->model;
    }

}

?>