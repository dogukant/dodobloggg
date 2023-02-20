<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Content;

class index extends Controller
{
    public function index(){
        $data['contents']=Content::orderBy('created_at','DESC')->paginate(3); //indexte yazıları oluşturulma tarihine göre sıralıyoruz ve paginate 3(Her sayfada 3 tane yazı) veriyoruz.
        $data['categories']=Category::inRandomOrder()->get(); //Kategoriler widgetı için inRandomOrder veriyoruz
        return view('front.index',$data);
    }

    public function single($category,$slug){
        $category=Category::whereName($category)->first() ?? abort (404); //slug değerini db de slugdan çekiyoruz. 1 tane istediğimiz için first yapıyoruz
        $content=Content::whereSlug($slug)->first() ?? abort (404); //slug değerini db de slugdan çekiyoruz. 1 tane istediğimiz için first yapıyoruz
         //Urldeki segmentlerden hem kategori hem de slug değerinin uyuşması gereiyor. O yüzden 2 tane yerden veri çekiyoruz.
        $content->increment('hit'); //yazıya girildiği zamban hit değeri artması için increment metodunu kullandık
        $data['content']=$content; //Kod tekrarına düşmemek için yukarda değişkene atayıp buradaki data değişkenine atıyoruz
        $data['categories']=Category::inRandomOrder()->get(); //Kategoriler widgetı için inRandomOrder veriyoruz
        return view('front.single',$data);
    }

    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403, 'Böyle bir kategori bulunamadı');
        $data['category']=$category;
        $data['contents']=Content::whereCategoryId($category->id)->get();
        return view('front.category',$data);
    }
}
