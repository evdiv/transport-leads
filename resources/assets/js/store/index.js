import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	state: {
		orders: [],
		service: '',
		cargos: [],
		isCargoFormShown: true
	},

	mutations: {
		selectService(state, text) {
			state.service = text;
		},

		addCargo(state, cargo) {

			this.state.cargos.push(cargo);

			//Hide the Cargo Form
			this.state.isCargoFormShown = false;
		},

		removeCargo(state, index) {
			this.state.cargos.splice(index, 1);
		}
	}
});