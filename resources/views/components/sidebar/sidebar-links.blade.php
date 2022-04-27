@foreach($links as $link)
    <a class="list-group-item list-group-item-action sidebar-link-item" id="list-{{ $link['icon'] }}-list" data-bs-toggle="list" href="{{ $link['href'] }}" role="tab" aria-controls="list-{{ $link['icon'] }}">
        <i class="fa fa-{{ $link['icon'] }}" style="margin-right: 10px"></i>
        {{ $link['title'] }}
    </a>
@endforeach
