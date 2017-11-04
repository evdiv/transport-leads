<template>
<div class="panel panel-default">
    <div class="panel-heading">Address of operations</div>
    <div class="panel-body">
        <form class="form-horizontal">

            <div class="form-group">
                <label for="loading-location" class="col-md-4 control-label">Loading Point</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="loading-location" value="" required autofocus>
                </div>
            </div>

            <div v-for="(location, index) in locations">
                <div class="form-group">
                    <label for="additional-location" class="col-md-4 control-label">Unloading Point</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="additional-location[]" value="" required autofocus>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button class="btn btn-primary" @click="addLocation">
                      Add Destination or Additional point
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

</template>

<script>
    export default {
        data: function () {
            return {
                locations: 0,
            }
        },

        methods: {
           addLocation: function () {
                this.locations++;
            }
        }
    }    
</script>   
