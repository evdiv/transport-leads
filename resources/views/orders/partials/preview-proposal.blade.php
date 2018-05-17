<proposal   :proposal="'{{ $proposal }}'" 
            :carrier="'{{ $proposal->carrier }}'"
            :added-ago="'{{ $proposal->created_at->diffForHumans() }}'"
            :number-messages = "{{ count($proposal->messages) }}">


    <div slot="full-details">

        <hr/>

        <div class="columns">
            <div class="column is-two-thirds">

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

            </div>

            <div class="column">

            </div>
        </div>


    </div>

</proposal>

