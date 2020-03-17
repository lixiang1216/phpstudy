<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-08 17:00:21
 * @LastEditTime : 2020-01-08 18:19:15
 * @Description: file content
 */

namespace App\Http\Requests;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Foundation\Http\FormRequest;

class storeBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            //
            'title'=>'required|unique:posts|min:5|max:20',
            'body'=>'required|min:20',
            'published_at'=>'date'
        ];
    }

    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    // public function messages()
    // {
    //     return [
    //         'title.required' => 'A title is required',
    //         'title.min' => 'A title min 5',
    //         'title.max' => 'A title max 20',
    //         'body.required'  => 'A body is required',
    //         'published_at.date'  => 'A published_at is date',
    //     ];
    // }
}
