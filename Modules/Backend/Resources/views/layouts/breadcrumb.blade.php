<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{ $mainPage }}</h4>

            @if(count($list) > 0)
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach($list as $key => $item)
                        <li class="breadcrumb-item">
                            @if(isset($item['route']))
                                <a href="{{ $item['route']  }}">{{ $item['name'] }}</a>
                            @else
                                {{ $item['name'] }}
                            @endif
                        </li>
                    @endforeach
                </ol>
            </div>
            @endif
        </div>
    </div>
</div>
