@extends('layouts.master')

@section ('content')

    @include('layouts.hero')

        <section class="section">
            <div class="container">
                <div class="content">

                    <!-- Order for Takelaj -->
                    @if(isset($order->takelaj)) 
                        @include('orders.partials.display-takelaj')
                    @endif

                    <!-- Order for Gruzchiki -->
                    @if(isset($order->gruzchiki)) 
                        @include('orders.partials.display-gruzchiki')
                    @endif

                    <!-- Order for Auto and Special Equipment -->
                    @if(isset($order->auto)) 
                        @include('orders.partials.display-auto')
                    @endif

        
                    @if(count($order->comments) > 0)
                    <!-- Comments Section -->
                    <article class="message is-info">
                        <div class="message-body">

                        <!-- List of Comments -->
                            @foreach($order->comments as $comment)
                                @include('orders.partials.display-comment')
                            @endforeach
                        <!--/ List of Comments -->

                        </div>
                    </article>
                    <!--/ Comments Section -->
                    @endif


                        <!-- Comments Form -->
                        @if($order->commentsAllowed())
                            <add-order-comment :order="{{ $order->id }}">
                                <template slot="csrf"> {{ csrf_field() }} </template>
                            </add-order-comment>
                        @endif
                        <!--/ Comments Form -->






                    <!-- Proposals from Carriers -->
                    <div class="list-group">
                        @foreach($order->proposals as $proposal)
                            @include('orders.partials.preview-proposal')
                        @endforeach
                    </div>
                    <!--/ Proposals from Carriers -->



                    <!-- Add Proposal from Carrier -->
                    @if($order->showProposalForm)
                        <form-add-carrier-proposal></form-add-carrier-proposal>

                        <form class="form-horizontal" method="POST" action="/orders/{{ $order->id }}/proposals">

                            {{ csrf_field() }}

                            <input type='hidden' name='order_id' value='{{ $order->id }}'/>

                            <div class="field is-horizontal">
                              <div class="field-label">
                                <label class="label">Add your proposal</label>
                              </div>
                              <div class="field-body">
                                <div class="field is-expanded">
                                  <div class="field has-addons">
                                    <p class="control">
                                      <a class="button is-static">
                                        $
                                      </a>
                                    </p>
                                    <p class="control is-expanded">
                                      <input class="input" type="tel" placeholder="Amount (in dollars)">
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="field is-horizontal">
                              <div class="field-label is-normal">
                              </div>
                              <div class="field-body">
                                <div class="field">
                                  <div class="control">
                                    <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
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
                                    <button class="button is-primary">
                                      Submit Proposal
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            
                        </form>

                    @elseif($order->showProposalButton) 

                        <a href="/carrier/register" class='pull-right button is-success is-outlined'>
                            Register as Carier for making Proposal
                        </a>
                    @endif
                    <!--/ Add Proposal from Carrier -->

                </div><!--/ .content -->
            </div><!--/ .container -->
        </section><!--/ section-->



@endsection


