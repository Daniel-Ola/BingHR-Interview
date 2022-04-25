{{--https://codepen.io/himalayasingh/pen/pxKKgd--}}
@include("layouts.components.NiceSelect.style")



<div id="app-cover">
<div id="select-box">
    <input type="checkbox" id="options-view-button">
    <div id="select-button" class="brd">
        <div id="selected-value">
            <span>{{ $placeholder }}</span>
        </div>
        <div id="chevrons">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
    <div id="options">
        @foreach($options as $option)
        <div class="option">
            <input class="s-c top" type="radio" name="platform" value="codepen">
            <input class="s-c bottom" type="radio" name="platform" value="codepen">
            <span class="label">{{ $option }}</span>
            <span class="opt-val">{{ $option }}</span>
        </div>
        @endforeach
        <div id="option-bg"></div>
    </div>
</div>
</div>
