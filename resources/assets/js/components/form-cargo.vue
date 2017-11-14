<template>    
    <div>

        <div class="panel panel-default" v-if="show">
            <div class="panel-heading">Cargo 

                    <div class="btn btn-xs btn-success" @click="showAddCargoForm"><i class="fa fa-plus" aria-hidden="true"></i> Add Cargo</div>   

             </div>
            <div class="panel-body">
                
                <!-- Added cargo -->
                <div v-for="(cargo, index) in cargos">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" @click="removeCargo(index)">
                            <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                        </button>
                        Груз: <b>{{ cargo.name }}</b>, Вес: <b>{{ cargo.weight }}</b> <br/>
                        Размеры: длина {{ cargo.length }}, ширина {{ cargo.width }}, высота {{ cargo.height }}
                    </div>
                </div>

                <!-- Add cargo Form Component -->
                <form-add-cargo v-if="showCargoForm" @addCargo="addCargo" @closeFrom = "closeCargoFrom">
                </form-add-cargo>

                <input name="order-takelaj-data" type="hidden" class="form-control" v-bind:value="orderTakelajData">

            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="btn btn-sm btn-default btn-block" v-if="showBtnNextStep" @click="goToNextStep"> Next</div>   
            </div>
        </div>
    </div>

</template>     


<script>
    export default {
        data: function () {
            return {
                show: true,
                showCargoForm: false,
                cargos: [],
                orderTakelajData: '',
                showBtnNextStep: false
            }
        },

        methods: {
            showAddCargoForm: function () {
                this.showCargoForm = true;
            },

           addCargo: function (cargo) {
                this.cargos.push(cargo);
                this.showCargoForm = false;
                this.showBtnNextStep = true;
                this.updateOrderTakelaj();
            },

            closeCargoFrom: function () {
                this.showCargoForm = false;
            },

            removeCargo: function (index) {
                this.cargos.splice(index, 1);
                this.updateOrderTakelaj();
            },

            updateOrderTakelaj: function() {
                this.orderTakelajData = JSON.stringify(this.cargos);

            },
            goToNextStep: function() {
                this.$emit("goToNextStep");
            }
        }
    }    
</script>                