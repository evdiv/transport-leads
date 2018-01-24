<article class="media">
    <figure class="media-left">
        <p class="image is-64x64">
            <img src="https://bulma.io/images/placeholders/128x128.png">
        </p>
    </figure>

    <div class="media-content">
        <div class="content">
            <p>
            <strong>{{ $comment->commentable->name }}</strong>
    			@if($comment->commentable_type == "App\Carrier")
    				<span class="tag is-rounded">Carrier</span>
    			@endif

                <br>
                    {{ $comment->body }}
                <br>
            
                <add-comment-reply>{{ $comment->created_at }}</add-comment-reply>

            </p>
        </div>
    </div>
</article>

