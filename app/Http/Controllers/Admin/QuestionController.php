<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Repositories\Question\QuestionRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Answer\AnswerRepository;

class QuestionController extends Controller
{
    protected $questionRepository;
    protected $categoryRepository;
    protected $answerRepository;

    public function __construct(QuestionRepository $questionRepository, CategoryRepository $categoryRepository, AnswerRepository $answerRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->categoryRepository = $categoryRepository;
        $this->answerRepository = $answerRepository;
    }

    public function index()
    {
        return view('admin.question.index', [
            'questions' => $this->questionRepository->paginate(),
        ]);
    }


    public function create()
    {
        return view('admin.question.form', [
            'categories' => $this->categoryRepository->getAll(),
        ]);
    }


    public function store(QuestionRequest $request)
    {
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $question = $this->questionRepository->save($data);
            for ($i = 0; $i < count($data['answers']); $i++) {
                $answers[] = [
                'content' => $data['answers'][$i],
                'question_id' => $question->id,
            ];
            }
            foreach ($answers as $key => $answer) {
                if ($data['radio-answer'] == $key) {
                    $answer['correct'] = true;
                }
                $this->answerRepository->save($answer);
            }
            DB::commit();
            return redirect()->route('question.index', $question->id)->with(
                'success',
                'Creation completed successfully.'
            );
        } catch (Exception) {
            DB::rollback();

            return redirect()->back()->with(
                'error',
                'Exception Occured. Please try again later.'
            );
        }
    }

    public function show($id)
    {
        if (! $question = $this->questionRepository->findById($id)) {
            abort(404);
        }

        return view('admin.question.form', [
            'question' => $question,
            'categories' => $this->categoryRepository->getAll(),
            'isShow' => true,
        ]);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
