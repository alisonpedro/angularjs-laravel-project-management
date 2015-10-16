<?php
/**
 * Created by PhpStorm.
 * User: SUPORTE
 * Date: 15/10/2015
 * Time: 16:03
 */

namespace CodeProject\Services;

use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Validators\ProjectNoteValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ProjectNoteService
{
    /**
     * @var ProjectNoteRepository
     */

    protected $repository;
    /**
     * @var ProjectNoteValidator
     */
    protected $validator;

    public function __construct(ProjectNoteRepository $repository, ProjectNoteValidator $validator)
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