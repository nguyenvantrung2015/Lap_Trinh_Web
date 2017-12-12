{{ HTML::style('css/sites/product_detail.css') }}
{{ HTML::style('bower/bootstrap-star-rating/css/star-rating.css') }}
{{ HTML::style('bower/bootstrap-star-rating/themes/krajee-svg/theme.css')}}
<div class="row starr" style="padding-bottom: 10px">
    <input id="input-id" type="text" class="rating" data-min="0"
           data-max="5"
           data-size="xs" data-step=0.1 value="{!! $prd_detail->rated !!}"
           title="" disabled="disabled">
    <h4>( This product is rated by 0 People )</h4>
</div>
{{ HTML::script('js/sites/product_detail.js') }}
{{ HTML::script('js/sites/star-rating.js')}}
{{ HTML::script('bower/bootstrap-star-rating/js/locales/LANG.js')}}
{{ HTML::script('bower/bootstrap-star-rating/themes/krajee-svg/theme.js')}}
{{ HTML::script('js/sites/product_comment.js')}}