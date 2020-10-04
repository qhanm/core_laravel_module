<?php
namespace Modules\Backend\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class RepositoryAbstract implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function all(array $params = [])
    {
        return $this->model->all();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function update($id, array $data = [])
    {
        // TODO: Implement update() method.
    }

    /**
     * @param array $attribute
     * @return bool
     */
    public function create(array $attribute)
    {
        return $this->model->insert($attribute);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }
}
