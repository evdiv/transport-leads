<div style="text-align: right;">
    <a @click="toggleCommentFormDisplay">add comment 
        <i v-if="!commentFormDisplay" class="fa fa-angle-down"></i>
        <i v-if="commentFormDisplay" class="fa fa-angle-up"></i>
    </a>
</div>           

<div v-if="commentFormDisplay">
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

            <div class="field-body">
                <div class="field">
                    <div class="is-pulled-right control">
                        <button type="submit" class="button is-info">
                            Send message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<hr/>