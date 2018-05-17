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


            <!--Add a comment form -->
            @if($order->areCommentsAllowed())
                    
                <span class="button is-primary is-small">toggle form</span>            

                <form method="POST" action="/orders/{{ $order->id }}/comments" class="form-horizontal" style="margin-top: 20px;">

                   {{ csrf_field() }}

                    <div class="field is-horizontal">
                          
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" name="body" rows="3" placeholder="Add your comment here..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                                    
                    <div class="field is-horizontal">
                      <div class="field-label">
                        <!-- Left empty for spacing -->
                      </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="is-pulled-right control">
                                    <button type="submit" class="button is-primary is-small">
                                        Send message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>



            @endif
            <!--/ Add a comment form -->


        </div>
    </article>

@endif

