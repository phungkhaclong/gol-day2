<?php

namespace App\Repositories\Question;

use App\Models\Question;
use App\Repositories\BaseRepository;

class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{
    public function __construct(Question $model)
    {
        $this->model = $model;
    }
}
