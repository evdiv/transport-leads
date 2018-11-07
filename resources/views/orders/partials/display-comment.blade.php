@if(count($order->comments) > 0)

    <article class="message is-small" style="margin-bottom: 2px;" >
        <div class="message-body">

            @foreach($order->comments as $comment)
           
                <article class="media" style="margin-top:0.3rem; border-bottom: 1px solid #e1ecf2;">

                    <div class="media-content">
                        <div class="content">
                            <p>
                                {{ $comment->body }}

                                @if($comment->commentable_type == "App\Carrier")
                                    <small>
                                        <a href="/carriers/{{ $comment->commentable->id }}">{{ $comment->commentable->name }}</a>
                                        <span class="tag is-rounded is-warning">Carrier</span>
                                    </small>
                                @else
                                    <small>
                                        <a href="/customers/{{ $comment->commentable->id }}">{{ $comment->commentable->name }}</a>
                                        @if($order->user_id == $comment->commentable->id)
                                            <span class="tag is-rounded is-info">Order Owner</span>
                                        @endif
                                    </small>
                                @endif

                                <small><span class="tag">{{ $comment->created_at->diffForHumans() }}</span></small> 
                                
                            </p>
                        </div>
                    </div>
                </article>

            @endforeach

        </div>
    </article>

@endif

