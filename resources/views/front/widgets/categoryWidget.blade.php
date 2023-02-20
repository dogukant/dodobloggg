@isset($categories)
    <!--
isseti yazmamızın sebebi; böyle yapmazsak controllerda her fonksiyona widgetı tanımlamamız lazım. Sayfada bu değişken tanımlandıysa çalışacak eğer controllerda
tanımlanmadıysa çalışmayacak.-->

<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
        <div class="list-group">
            @foreach($categories as $category)
                <a href="{{route('category',$category->slug)}}" class="list-group-item list-group-item-action">{{$category->name}}<span class="badge bg-black float-end">{{$category->articleCount()}}</span></a>
            @endforeach
        </div>
    </div>
    @endif

