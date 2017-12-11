<template>
    <div>


    <div class="field is-horizontal">
        <div class="field-body">
            

            <div class="field">
                <div class="field-label is-normal">
                    <label class="label">To</label>
                </div>

                <div class="field-body">
                    <div class="field">
                      <p class="control">
                        <input class="input" type="email" placeholder="Recipient email">
                      </p>
                    </div>
                </div>
            </div>



            <div class="field">
                <div class="field-label is-normal">
                    <label class="label">To</label>
                </div>

                <div class="field-body">
                    <div class="field">
                      <p class="control">
                        <input class="input" type="email" placeholder="Recipient email">
                      </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="field">
        <div class="field-body">

            <div class="field">
                <label class="label">Address</label>
                <div class="control">
                    <input type="text" class="input" name="locations[]" value="" required>
                </div>
            </div>
        </div>
    </div>


            

       </div>
    </div>









        <div v-for="location in locations">
            <div class="field">
                <label class="label">Address</label>
                <div class="control">
                    <input type="text" class="form-control" name="locations[]" value="" required>
                </div>

                <a href="#" @click.prevent="deleteLocation"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>

            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" @click="addLocation"> Add Address</button>
        </div>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                locations: 0
            }
        },

        methods: {
           addLocation: function() {
                this.locations++;
            },

            deleteLocation: function() {
                this.locations--;
            }
        }
    }    
</script>   
