<template>
    <div>

        <div class="control has-text-right" v-if="!commentFormIsShown">
            <button class="button is-info" @click="commentFormIsShown = true">
                <i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;Add Comment
            </button>
        </div>


        <form class="form-horizontal" v-if="commentFormIsShown">

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Add Comment</label>

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
                                Send message
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
