<template>    

    <div class="panel panel-default" v-if="show">
        <div class="panel-heading">Takelajnie Raboty</div>
        <div class="panel-body">
            
                  <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="demontaj">Demontaj</label>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="montaj">Montaj</label>
                </div>
            </div>

            <div class="col-sm-4 col-sm-offset-2">
                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="peremeshenie">Peremeshenie</label>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="razbor">Razbor perekritiy</label>
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
                    <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
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
                show: true,
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