<template>
	<div class="panel-body">

        <label class="radio-inline">
            <input type="radio" name="customer" value="register" @click="displayRegisterForm" checked>Register
        </label>
        <label class="radio-inline">
            <input type="radio" name="customer" value="login" @click="displayLoginForm">Login
        </label>

		<slot name="login" v-if="this.login"></slot>
		<slot name="register" v-if="this.register"></slot>

	</div>
</template>

<script>
	export default {
		data: function() {
			return {
				register: true,
				login: false
			}
		},
		methods: {
			displayRegisterForm: function() {
				this.register = true;
				this.login = false;
			},
			displayLoginForm: function() {
				this.register = false;
				this.login = true;
			}
		}
	}
</script>