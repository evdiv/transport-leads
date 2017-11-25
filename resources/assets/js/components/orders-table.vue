<template>
    <section>

        <b-field grouped group-multiline>

            <b-select v-model="perPage" :disabled="!isPaginated">
                <option value="5">5 per page</option>
                <option value="10">10 per page</option>
                <option value="15">15 per page</option>
                <option value="20">20 per page</option>
            </b-select>

        </b-field>

        <b-table
            :data="tableData"
            :paginated="isPaginated"
            :per-page="perPage"
            detailed
            detail-key="id">


            <template slot-scope="props">

                <b-table-column label="Cargo Type">
                    <i class="mdi mdi-forklift"></i> {{ props.row.first_name }}
                </b-table-column>

                <b-table-column label="Location">
                    <b-icon icon="map-marker" type="is-danger" size="is-small"></b-icon> {{ props.row.last_name }}
                </b-table-column>

                <b-table-column label="Bids">
                   0
                </b-table-column>       

                <b-table-column label="Date" centered>
                    {{ new Date(props.row.date).toLocaleDateString() }}
                </b-table-column>

            </template>


            <template slot="detail" slot-scope="props">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <b-icon
                                icon="forklift"
                                size="is-large"
                                type="is-info">
                            </b-icon>
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>{{ props.row.id }} {{ props.row.first_name }} {{ props.row.last_name }}</strong>
                                <small>@{{ props.row.first_name }}</small>
                                <small>31m</small>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Proin ornare magna eros, eu pellentesque tortor vestibulum ut.
                                Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
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
            const tableData = [
                { 'id': 1, 'first_name': 'Jesse', 'last_name': 'Simmons', 'date': '2016-10-15 13:43:27', 'gender': 'Male' },
                { 'id': 2, 'first_name': 'John', 'last_name': 'Jacobs', 'date': '2016-12-15 06:00:53', 'gender': 'Male' },
                { 'id': 3, 'first_name': 'Tina', 'last_name': 'Gilbert', 'date': '2016-04-26 06:26:28', 'gender': 'Female' },
                { 'id': 4, 'first_name': 'Clarence', 'last_name': 'Flores', 'date': '2016-04-10 10:28:46', 'gender': 'Male' },
                { 'id': 5, 'first_name': 'Anne', 'last_name': 'Lee', 'date': '2016-12-06 14:38:38', 'gender': 'Female' }
            ]

            return {
                tableData,
                isPaginated: true,
                defaultSortDirection: 'asc',
                isHoverable: true,
                perPage: 5
            }
        }
    }
</script>