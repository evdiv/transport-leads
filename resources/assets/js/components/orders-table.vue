<template>
    <section>
        

        <div style="text-align:center;" v-if="orders.length == 0">
           <i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i> Lessons not found
        </div>

        <b-field grouped group-multiline>

            <b-select v-model="perPage" :disabled="!isPaginated">
                <option value="25">25 per page</option>
                <option value="50">50 per page</option>
                <option value="100">100 per page</option>
            </b-select>

        </b-field>

        <b-table
            :data="getOrders"
            :paginated="isPaginated"
            :per-page="perPage"
            focusable
            detail-key="id">


            <template slot-scope="props">

                <b-table-column label="#">
                   <a :href="'/orders/'+ props.row.id" >{{ props.row.id }}</a>
                </b-table-column>


                <b-table-column label="User">
                   <a :href="'/users/'+ props.row.user.id" >{{ props.row.user.name }}</a>
                </b-table-column>



                <b-table-column label="Cargo">
                   
                    <div v-for="cargo in props.row.cargos">
                       {{ cargo.name }} 

                        <span v-if="cargo.quantity > 1">
                           -  {{ cargo.quantity }} pieces
                        </span>
                       
                        <div class="content is-small">Dimensions of one piece: 

                            <span class="tag is-light">
                                {{ cargo.weight }} {{ cargo.dimention }} 
                            </span>

                            <span class="tag is-light" v-if="cargo.length > 0">
                                length: {{ cargo.length }} {{ cargo.size }}</span>

                            <span class="tag is-light" v-if="cargo.width > 0" >
                                width: {{ cargo.width }} {{ cargo.size }}</span>

                            <span class="tag is-light" v-if="cargo.height > 0">
                                height: {{ cargo.height }} {{ cargo.size }}</span>
                        </div>
                    </div>
                </b-table-column>


                <b-table-column label="Service">
                    
                    <template v-if="props.row.takelaj">
                        <i class="fa fa-cogs" aria-hidden="true"></i> Takelaj<br/>

                        <span class="tag is-dark" v-if="props.row.takelaj.demontaj">
                            <i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Demontaj
                        </span>

                        <span class="tag is-dark" v-if="props.row.takelaj.montaj">
                            <i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Montaj
                        </span>        

                        <span class="tag is-dark" v-if="props.row.takelaj.peremeshenie">
                            <i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Peremeshenie
                        </span>      

                        <span class="tag is-dark" v-if="props.row.takelaj.razbor">
                            <i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Razbor
                        </span>                                            

                    </template>
                </b-table-column>



                <b-table-column label="Location">
                    <b-icon icon="map-marker" type="is-danger" size="is-small"></b-icon> 

                    <template v-for="location in props.row.locations">
                        <span v-if="location.pogruzka == 0"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        {{ location.city}}
                    </template>

                </b-table-column>

   
                <b-table-column label="Date" centered>
                    {{ new Date(props.row.date).toLocaleDateString() }}
                </b-table-column>


                <b-table-column label="Bids">
                   0
                </b-table-column>    

            </template>


            <template slot="detail" slot-scope="props">
                <article class="media">

                    <div class="media-content">
                        <div class="content">
                            <p>{{ props.row.note }}</p>
                        </div>
                    </div>
                </article>
            </template>
        </b-table>
    </section>
</template>

<script>

    export default {
        data() {
            return {
                isPaginated: true,
                loader: true,
                defaultSortDirection: 'asc',
                isHoverable: true,
                perPage: 25,
                testProp: 66
            }
        },
        computed: {
            getOrders() {
                return JSON.parse(this.orders);
            }
        },

        props: ['orders'],
    }
</script>