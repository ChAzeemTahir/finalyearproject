@foreach($data->chunk(3) as $user)
    <div class="row">
        @foreach($user as $value)
            <div class="col-sm-6 col-md-4">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('images/'.$value['imagefile'])}}" height="298px"
                                 width="455px" class="img-thumnail"/>
                            <img class="pic-2" src="{{ asset('images/'.$value['imagefile'])}}" height="298px"
                                 width="455px" class="img-thumnail"/>
                        </a>
                        <a class="add-to-cart" href="{{url('view',$value['id'])}}">View</a>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$value['title']}}</a></h3>
                        <span class="price">Rs{{$value['book_price']}}</span><br>
                        <a type="button" class="btn btn-primary" style="border-radius: 90px"
                           href="{{url('add-to-cart/'.$value->id)}}"><span>Add to Cart</span></a>
                        {{--<button class="btn bg-primary" style="border-radius: 90px" href="{{ url('add-to-cart/'.$data->id) }}">Add To cart</button>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
<br><br>
{!! $data->render() !!}
