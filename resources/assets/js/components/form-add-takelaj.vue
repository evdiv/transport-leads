<template>    
    <div>

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

        <hr /> 
        <!-- Add cargo Form Component -->
        <form-add-cargo v-if="showForm" @addCargo="addCargo"></form-add-cargo>

        <input type="hidden" name="order-takelaj-data" class="form-control" v-bind:value="orderTakelajData">

    </div>
</template>     


<script>
    export default {
        data: function () {
            return {
                showForm: false,
                cargos: [],
                orderTakelajData: ''
            }
        },

        methods: {
            showAddCargoForm: function () {
                this.showForm = true;
            },
           addCargo: function (cargo) {
                this.cargos.push(cargo);
                this.showForm = false;
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