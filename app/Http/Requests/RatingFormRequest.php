<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatingFormRequest extends FormRequest
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
            'camp_name' => 'required'
        ];
    }
}

class AboutController extends Controller {

    public function store(Request $request)
    {
      $ratingform = [];
  
      $ratingform['camp_name'] = $request->get('camp_name');
      $ratingform['city'] = $request->get('city');
      $ratingform['state'] = $request->get('state');
  
      flash('Your rating is saved!')->success();
  
      return redirect()->route('ratingform.create');
    }
  }