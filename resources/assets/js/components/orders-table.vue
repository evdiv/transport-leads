<template>
    <section>
        

        <div style="text-align:center;" v-if="loader">
            <i class="fa fa-refresh fa-spin fa-4x fa-fw"></i><span class="sr-only">Loading...</span>
        </div>


        <div style="text-align:center;" v-if="lessons.length == 0 && !loader">
           <i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i> Lessons are not found
        </div>

        <b-field grouped group-multiline>

            <b-select v-model="perPage" :disabled="!isPaginated">
                <option value="25">25 per page</option>
                <option value="50">50 per page</option>
                <option value="100">100 per page</option>
            </b-select>

        </b-field>

        <b-table
            :data="lessons"
            :paginated="isPaginated"
            :per-page="perPage"
            focusable
            detail-key="id">


            <template slot-scope="props">

                <b-table-column label="Order #">
                   <a :href="'/orders/'+ props.row.id" >{{ props.row.id }}</a>
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
                            Demontaj
                        </span>

                        <span class="tag is-dark" v-if="props.row.takelaj.montaj">
                            Montaj
                        </span>        

                        <span class="tag is-dark" v-if="props.row.takelaj.peremeshenie">
                            Peremeshenie
                        </span>      

                        <span class="tag is-dark" v-if="props.row.takelaj.razbor">
                            Razbor
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
        mounted() {
            this.getLessons();
        },

        data() {
            return {
                lessons: [],
                isPaginated: true,
                loader: true,
                defaultSortDirection: 'asc',
                isHoverable: true,
                perPage: 25,
                testProp: 66
            }
        },
        props: ['user-complete-orders', 'user-active-orders'],

        methods: {
            getLessons() {
                this.$store.dispatch('getOrders', 
                    {
                        userCompleteOrders: this.userCompleteOrders,
                        userActiveOrders: this.userActiveOrders
                    })
                    .then((response) => {
                       this.lessons = response.data;
                       this.loader = false;
                    })
                    .catch((error) => {
                        console.log(error);

                    });
            }
        },
    }
</script>