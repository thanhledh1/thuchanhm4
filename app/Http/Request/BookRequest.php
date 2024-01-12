<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'book_name' => 'required|unique:books,book_name,' . $this->route('id'),
            'isbn' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'page_count' => 'required',
            'publication_year' => 'required',
        ];
    }
    public function messages()
    {
        return
         [
            'book_name.required' => 'Bạn chưa nhập :attribute',
            'book_name.unique' => 'Đã tồn tại :attribute',
            'isbn.required' => 'Bạn chưa nhập :attribute',
            'author.required' => 'Bạn chưa nhập :attribute',
            'genre.required' => 'Bạn chưa nhập :attribute',
            'page_count.required' => 'Bạn chưa nhập :attribute',
            'publication_year.required' => 'Bạn chưa nhập :attribute',
         ];
    }
    public function attributes()
    {
        return [
            'book_name' => 'tên sách',
            'isbn' => 'mã sách',
            'author' => 'tác giả',
            'genre' => 'thể loại',
            'page_count' => 'số trang',
            'publication_year' => 'năm xuất bản',
        ];
    }
}
