<?php

namespace App\Http\Controllers\Additional;

use App\Http\Controllers\Controller;
use App\Models\Additional\Language;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LanguageApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Language::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $language = new Language;
        $language->name = $request->name;
        $language->url = $request->url;

        if ($request->image) {
            (new FileService($request, 'image'))->saveFile($language, 'image', 'images/languages/');
        }
    
        $language->save();
        return response(['success' => 'Muvaffaqiyatli qo\'shildi!!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        return $language;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        $language->name = $request->name;
        $language->url = $request->url;
        if($request->image){
            (new FileService($request, 'image'))->saveFile($language, 'image', '/images/languages/');
        }
        $language->save();
        return response((['success', 'Muvaffaqiyatli o\'zgartirildi!!!']));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        $image_path = 'images/languages/' . $language->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $language->delete();

        return response(['success', 'Muvaffqiyatli o\'chirildi!!!']);
    }
}
