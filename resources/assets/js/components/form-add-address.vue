<template>
<div class="panel panel-default">
    <div class="panel-heading">
    Адрес и время проведения работ</div>
    <div class="panel-body">

        <div class="form-group">
            <label for="date" class="col-md-4 control-label">Дата работ</label>

            <div class="col-md-6">
                <input type="date" class="form-control" name="date" value="">
            </div>
        </div>

        <div class="form-group">
            <label for="time" class="col-md-4 control-label">Время работ</label>

            <div class="col-md-6">
                <input type="time" class="form-control" name="time" value="">
            </div>
        </div>


        <div class="form-group">
            <label for="location" class="col-md-4 control-label">Пункт погрузки</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="locations[]" value="" required>
            </div>
        </div>

        <div v-for="location in locations">
            <div class="form-group">
                <label for="location" class="col-md-4 control-label">Пункт дозагрузки/выгрузки</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="locations[]" value="" required>
                </div>

                <div class="col-md-2 pull-left">
                    <a href="#" @click.prevent="deleteLocation"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
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
