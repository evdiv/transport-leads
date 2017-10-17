<template>    
    <div class="panel panel-default" v-if="show">
        <div class="panel-heading">Uslugi Gruzchikov</div>
        <div class="panel-body">
            

        <div class="form-group">

            <label for="people_number" class="col-md-4 control-label">Number of people</label>

            <div class="col-md-6">
                <input type="number" class="form-control" name="people_number" value="" required>
            </div>

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


            <div class="col-sm-4">
                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="pogruzka">Pogruzka / Razgruzka</label>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="peremeshenie">Peremeshenie</label>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="uborka">Uborka</label>
                </div>
            </div>




        </div>


        <div class="row">
            <div class="col-sm-12 text-center">
                <!-- Cargo Type buttons -->
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-car fa-2x" aria-hidden="true"></i></div>
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-cogs fa-2x" aria-hidden="true"></i></div>
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-home fa-2x" aria-hidden="true"></i></div>
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-subway fa-2x" aria-hidden="true"></i></div>
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-ship fa-2x" aria-hidden="true"></i></div>
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-motorcycle fa-2x" aria-hidden="true"></i></div>
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-diamond fa-2x" aria-hidden="true"></i></div>
                <div class="btn btn-primary" @click="showAddCargoForm"><i class="fa fa-university fa-2x" aria-hidden="true"></i></div>                
            </div>
        </div>

        <!-- Added cargo -->
        <div v-for="(cargo, index) in cargos">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" @click="removeCargo(index)">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                </button>
                Груз: <b>{{ cargo.name }}</b>, Вес: <b>{{ cargo.weight }}</b> <br/>
                Размеры: длина {{ cargo.length }}, ширина {{ cargo.width }}, высота {{ cargo.height }}
            </div>
        </div>

        <!-- Add cargo Form Component -->
        <form-add-cargo v-if="showCargoForm" @addCargo="addCargo"></form-add-cargo>

        <input name="order-takelaj-data" type="hidden" class="form-control" v-bind:value="orderTakelajData">
          
        </div>
    </div>
</template>     


<script>
    export default {
        data: function () {
            return {
                show: false,
                showCargoForm: false,
                cargos: [],
                orderTakelajData: ''
            }
        },

        methods: {
            showAddCargoForm: function () {
                this.showCargoForm = true;
            },
           addCargo: function (cargo) {
                this.cargos.push(cargo);
                this.showCargoForm = false;
                this.updateOrderTakelaj();
            },
            removeCargo: function (index) {
                this.cargos.splice(index, 1);
                this.updateOrderTakelaj();
            },
            updateOrderTakelaj: function() {
                this.orderTakelajData = JSON.stringify(this.cargos);

            }
        }
    }    
</script>                