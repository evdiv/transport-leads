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

		getOrders() {
			return Axios.get('/get-orders');
		}
	} 
});