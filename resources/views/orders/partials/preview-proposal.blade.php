<proposal   :proposal="'{{ $proposal }}'" 
            :carrier="'{{ $proposal->carrier }}'"
            :added-ago="'{{ $proposal->created_at->diffForHumans() }}'"
            :number-messages = "{{ count($proposal->messages) }}">


    <div slot="acceptProposal">
    
        @if($proposal->canBeAccepted())

            <form method="POST" action="/orders/{{ $proposal->order->id }}/accept/{{ $proposal->id }}" class="form-horizontal" style="margin-top: 20px;">
                {{ csrf_field() }}
                <button type="submit" class="button is-success">Accept Proposal</button>
            </form>

        @elseif($proposal->accepted)
            <div class="tag is-rounded is-success">Proposal accepted</div>        
        @endif
    </div>



    @if($proposal->messageCanBeAdded())

    <div slot="proposalMessages" slot-scope="messages">
        <hr/>
        <div class="columns">
            <div class="column">

                @foreach($proposal->messages as $message)
                    <div class="{{ $message->postedfrom_type == 'App\Carrier' ? 'text-success' : 'text-warning'}}">
                        <small>
                            {{ $message->body }}  

                            <a href='#'>{{ $message->postedfrom->name }}</a>

                            @if(Auth::guard('web-carrier')->check() )
                                <span class="tag is-rounded is-warning">Carrier</span>
                            @endif

                            <span class="tag">{{ $message->created_at->diffForHumans() }} </span>
                            
                        </small>
                    </div>
                @endforeach

                <div style="text-align: right;">
                    <a v-on:click="messages.toggleMessageFormDisplay">add message 
                        <i v-if="!messages.messageFormDisplay" class="fa fa-angle-down"></i>
                        <i v-if="messages.messageFormDisplay" class="fa fa-angle-up"></i>
                    </a>
                </div>   

                <div v-if="messages.messageFormDisplay">

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
                                        <button type="submit" class="button is-info">
                                            {{ Auth::guard('web-carrier')->check() ? 'Написать Заказчику' : 'Написать перевозчику' }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </form>

                </div>

            </div>

        </div>
    </div>

    @endif

</proposal>

