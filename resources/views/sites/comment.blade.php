{{ HTML::style('css/sites/product_detail.css') }}
{{ HTML::style('bower/bootstrap-star-rating/css/star-rating.css') }}
{{ HTML::style('bower/bootstrap-star-rating/themes/krajee-svg/theme.css')}}
<div class="container">
    @foreach($listCmt as $comment)
        <div class="row">
            <div class="review-block">
                <div class="row">
                    @foreach( $listUser as $users1)
                        @if($users1->id==$comment->user_id)
                            <div class="col-sm-2" style="text-align: center">
                                @if(isset($users1->avatar))
                                    <img src="{{url($users1->avatar)}}" class="img-rounded">
                                @else
                                    <img src="{{asset('../img/user.png')}}"
                                         class="img-rounded">
                                @endif
                                <div class="review-block-name">
                                    <label style="text-align: center;font-size: 17px !important;font-weight: bold !important;">{{$users1->name}}</label>
                                </div>
                                <div class="review-block-date">{{$comment->created_at}}</div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-sm-9">
                        <input id="input" type="text" class="rating"
                               value="{{ $comment->rated }}"
                               data-readonly="true" data-max="5" data-min="0"
                               data-step="0.5"
                               size="sm" title="">
                        <div class="review-block-description">
                            {{ $comment->content }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div> <!-- /container -->
{{ HTML::script('/js/sites/product_comment.js',['type' => 'text/javascript'])}}
{{ HTML::script('js/sites/product_detail.js') }}
{{ HTML::script('js/sites/star-rating.js')}}
{{ HTML::script('bower/bootstrap-star-rating/js/locales/LANG.js')}}
{{ HTML::script('bower/bootstrap-star-rating/themes/krajee-svg/theme.js')}}