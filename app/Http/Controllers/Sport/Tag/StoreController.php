<?php

namespace App\Http\Controllers\Sport\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sport\Category\StoreRequest;
use App\Models\Category;
use App\Models\SportCategory;
use App\Models\SportTag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        SportTag::firstOrCreate($data);
        return redirect()->route('sport.tag.index');
    }
}
