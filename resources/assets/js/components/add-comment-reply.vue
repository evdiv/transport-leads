<template>
    <div>

        <small>
            <a @click="commentFormIsShown = !commentFormIsShown">
                <i class="fa fa-comment-o" aria-hidden="true"></i> 
                Reply</a>, <span class="tag"><slot></slot></span>
        </small>


        <form class="form-horizontal" v-if="commentFormIsShown">

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Add Reply</label>
                </div>
                  
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <textarea class="textarea" name="body" placeholder="Add your comment here..."></textarea>
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

                        <div class="button is-warning is-small"
                            @click="commentFormIsShown = !commentFormIsShown">
                            Hide form
                        </div>

                        <div class="button is-success is-small">
                            Send Reply
                        </div>
                    </div>
                </div>
              </div>
            </div>

        </form>

    </div>
</template>

<script>
    export default {
        data () {
            return {
                commentFormIsShown: false
            }
        }
    }    
</script>   
