@if(count($order->comments) > 0)

    <article class="message is-small">
        <div class="message-body">

            @foreach($order->comments as $comment)
           
                <article class="media" style="margin-top:0.3rem; border-bottom: 1px solid #e1ecf2;">

                    <div class="media-content">
                        <div class="content">
                            <p>
                                {{ $comment->body }}

                            <small>
                           <a href="/carriers/{{ $comment->commentable->id }}">{{ $comment->commentable->name }}</a></small> 

                                @if($comment->commentable_type == "App\Carrier")
                                    <span class="tag is-rounded is-warning">Carrier</span>
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

