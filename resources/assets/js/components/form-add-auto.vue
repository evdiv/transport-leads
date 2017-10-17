<template>
    <div class="panel panel-default" v-if="show">
        <div class="panel-heading">Auto</div>

        <div class="panel-body">

            <div class="form-group">

                <label for="required_time" class="col-md-4 control-label">Required Time</label>

                <div class="col-md-6">
                    <select name="required_time" class="form-control">
                        <option>I dont know</option>
                        <option>less than 4 hours</option>
                        <option>5 hours</option>
                        <option>6 hours</option>
                        <option>7 hours</option>
                        <option>8 hours</option>
                        <option>9 hours</option>
                        <option>more than 10 hours</option>
                    </select>
                </div>


                <label for="service_type" class="col-md-4 control-label">Type of Auto</label>

                <div class="col-md-6">
                    <select name="service_type" class="form-control">
                        <option>Auto Type 1</option>
                        <option>Auto Type 2</option>
                        <option>Auto Type 3</option>
                        <option>Auto Type 4</option>
                        <option>Auto Type 5</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                show: false
            }
        }
    }    
</script>    