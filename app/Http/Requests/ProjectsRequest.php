<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    protected $dontflash = ['image_path', 'sound_path'];

    public function authorize()
    {
    	return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	return [
    		'title'        => ['required', 'min:1', 'max:20'],
    		'genre'        => ['required'],
    		'image_path'   => ['required', 'mimes:jpg,jpeg,png,gif,bmp', 'max:30000'],
    		// 'sound_path'   => ['required', 'mimes:mp3', 'max:30000'],
    		'project_info' => ['required', 'min:1', 'max:100'],
    	];
    }

    public function messages()
    {
    	return [
    		'required' => ':attribute은(는) 필수 입력 항목입니다.',
    		'min'      => ':attribute은(는) 최소 :min 글자 이상이 필요합니다.',
    		'max'      => ':attribute은(는) 최대 :max 글자 이하가 필요합니다.',
    	];
    }

    public function attributes()
    {
    	return [
    		'title'        => '제목',
    		'genre'        => '장르',
    		'image_path'   => '이미지',
    		'sound_path'   => '음악',
    		'project_info' => '설명',
    	];
    }
}
