<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Repositories\NewsRepository;

class UpdateBlogRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request, NewsRepository $blog) {
        $blogID = $blog->getIDfromSlug($this->input('slug'));
        return [
          'title'      => 'required',
          'slug'      => 'required|unique:news,slug,' . $blogID,
          'content'      => 'required',
          'image'     => 'mimes:jpeg,bmp,png,jpg'
        ];
    }
}