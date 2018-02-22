<article class="message is-success">
    <div class="message-body">
        <div class="columns">
            <div class="column is-1">
                <span style="font-size: 20px;">{{ $proposal->amount }} USD</span>

                @if($proposal->accepted)
                    <div class="tag is-rounded is-success">Proposal accepted</div>
                @endif
            </div>

            <div class="column is-7">
                <strong><a href="/carriers/{{ $proposal->carrier->id }}">{{ $proposal->carrier->name }}</a></strong>
                <br/>{{ $proposal->body }}
                <br/><small><span class="tag">Proposal added on {{ $proposal->created_at->diffForHumans() }}</span></small>
            </div>

            <div class="column is-4">





                <button class="button is-info">
                    <i class="fa fa-envelope fa-lg"></i> &nbsp;&nbsp;&nbsp;
                    <div class="tag is-rounded is-white"> {{ count($proposal->messages) }} </div>
                </button>


                <button class="button is-success">
                   <i class="fa fa-plus"></i> &nbsp;&nbsp;&nbsp;Show details
                </button>

            </div>

        </div>

        

        <div class="extenderd-proposal">

            <hr/>

            @foreach($proposal->messages as $message)
                <p class="{{ $message->postedfrom_type == 'App\Carrier' ? 'text-success' : 'text-warning'}}">
                    <small><span class="tag">{{ $message->created_at }} </span></small>

                    <b>{{ $message->postedfrom->name }}</b>
                    @if(Auth::guard('web-carrier')->check() )
                        <span class="tag is-rounded is-warning">Carrier</span>
                    @endif

                    {{ $message->body }}
                </p>
            @endforeach



            @if($proposal->canMessageBeAdded())

                <form method="POST" action="/proposals/{{ $proposal->id }}/message" class="form-horizontal" style="margin-top: 20px;">
                    
                    {{ csrf_field() }}

                    <div class="field is-horizontal">
                          
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" name="body" rows="2" placeholder="App your message here..."></textarea>
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
                                        {{ Auth::guard('web-carrier')->check() ? 'Написать Заказчику' : 'Написать перевозчику' }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>  

                </form>
            @endif



             @if($proposal->canBeAccepted())

                    <form method="POST" action="/orders/{{ $order->id }}/accept/{{ $proposal->id }}">
                        {{ csrf_field() }}

                        <input type="submit" class="button is-success" value="Принять предложение">
                    </form> 

            @endif  


        </div>
 
    </div>
</article>


