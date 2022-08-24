<?php

namespace App\Repositories\Phonezalo;

use App\Models\Phonezalo;
use App\Repositories\BaseRepository;

class PhonezaloRepository extends BaseRepository implements PhonezaloRepositoryInterface
{
    public function __construct(Phonezalo $model)
    {
        $this->model = $model;
    }
}
