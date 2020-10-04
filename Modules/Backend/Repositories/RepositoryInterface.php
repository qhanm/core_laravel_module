<?php
namespace Modules\Backend\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

interface RepositoryInterface
{
    /**
     * @param $id
     * @return Collection | NotFoundHttpException
     */
    public function findOrFail($id);

    /**
     * @param $id
     * @return Collection
     */
    public function get($id);

    /**
     * @param array $params
     * @return Collection
     */
    public function all(array $params = []);

    /**
     * @param $id
     * @param array $data
     * @return bool
     */
    public function update($id, array $data = []);

    /**
     * @param $id
     * @return bool
     */
    public function delete($id);

    /**
     * @param array $attribute
     * @return bool
     */
    public function create(array $attribute);

}
