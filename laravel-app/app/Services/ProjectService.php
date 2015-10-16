<?php
/**
 * Created by PhpStorm.
 * User: SUPORTE
 * Date: 15/10/2015
 * Time: 16:03
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ClientRepository;
use CodeProject\Repositories\ProjectRepository;
use CodeProject\Validators\ProjectValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ProjectService
{
    /**
     * @var ClientRepository
     */

    protected $repository;
    /**
     * @var ClientValidator
     */
    protected $validator;

    public function __construct(ProjectRepository $repository, ProjectValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }catch(ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];

        }

    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data, $id);
    }
}