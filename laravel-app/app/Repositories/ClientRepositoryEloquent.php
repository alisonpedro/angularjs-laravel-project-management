<?php
/**
 * Created by PhpStorm.
 * User: SUPORTE
 * Date: 15/10/2015
 * Time: 10:31
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }

}