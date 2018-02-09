import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios'


Vue.use(Vuex)

export default new Vuex.Store({
	state: {
		orders: [],
		isCargoFormShown: true,
		newOrder: {
			service: "",
			registered: false,
			cargos: []
		},
		newCarrier: {
			name: "",
			description: "",
			maxCargoWeight: 0,
			maxPeople: 0,
			maxAutokran:0,
			maxManipulator:0,
			maxNizkoramnik:0,
			maxLifter: 0,
			maxOpen:0
		}
	},

	mutations: {
		selectService(state, text) {
			state.newOrder.service = text;
		},

		addCargo(state, cargo) {

			this.state.newOrder.cargos.push(cargo);
			this.state.isCargoFormShown = false;
		},

		removeCargo(state, index) {
			this.state.newOrder.cargos.splice(index, 1);
		}
	},

	actions: {
		postTakelajOrder() {
			Axios.post('/takelaj', this.state.newOrder);
		},

		postCarrier() {
			Axios.post('/carriers/', this.state.newCarrier);
		}
	} 
});