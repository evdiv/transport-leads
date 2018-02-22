@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else       

        <b-message type="{{ $message['level'] }}">

                @if ($message['important'])
                    <button class="delete">&times;</button>
                @endif

                {!! $message['message'] !!}
        </b-message>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}
