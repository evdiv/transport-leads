import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	state: {
		orders: [],
		isCargoFormShown: true,
		newOrder: {
			service: "",
			registered: false,
			cargos: [],
			destinations: []
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
		},

		addDestination(state, destination) {

			this.state.newOrder.destinations.push(destination);
		},

		removeDestination(state, index) {
			this.state.newOrder.destinations.splice(index, 1);
		}
	}
});