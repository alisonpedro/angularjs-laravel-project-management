<?php
/**
 * Created by PhpStorm.
 * User: SUPORTE
 * Date: 15/10/2015
 * Time: 16:18
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules = [
        'project_id' => 'required|integer',
        'title' => 'required',
        'note' => 'required'
    ];

}