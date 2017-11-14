<template>
	<div>
		<!-- JS Buttons for selecting the required Service -->
		<div class="row" v-if="this.step0">
	        <div class="col-sm-4">
	            <button type="button" class="btn btn-primary btn-lg btn-block" @click="selectTakelaj">
	            Такелажные работы</button>
	        </div>
	        <div class="col-sm-4">
	            <button type="button" class="btn btn-primary btn-lg btn-block" @click="selectGruzchiki">
	            Uslugi Gruzchikov</button>
	        </div>
	        <div class="col-sm-4">
	            <button type="button" class="btn btn-primary btn-lg btn-block" @click="selectAuto">
	            Zakaz Spectechniki</button>
	        </div>
	    </div>


    	<slot name="form-add-order-open"></slot>

	        <h3>{{ this.requiredServiceName }}</h3>

			<!-- STEP 1 Add and Display Cargo -->
	       	<form-cargo v-if="this.step1" @goToNextStep = "displayStep2"></form-cargo>


	        <!-- STEP 2 SELECT TYPE OF THE SERVICE REQUIRED -->
	        <div v-if="this.step2">
	        	<form-add-takelaj v-if="this.takelaj"></form-add-takelaj>
	        	<form-add-gruzchiki v-if="this.gruzchiki"></form-add-gruzchiki>
	        	<form-add-auto v-if="this.auto"></form-add-auto>
	        </div>


	        <!-- STEP 3 Loading Time / Address, Transit and Unloading Points -->
	        <form-add-address v-if="this.step3"></form-add-address>



			<!-- STEP 4: Add Personal Information and Complete Order -->
			<div v-if="this.step4">

			    <div class="panel panel-default">

			    	<div class="panel-heading">Персональная информация</div>
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
				</div>

	            <div class="form-group">
	                <div class="col-md-6 col-md-offset-3">
	                <br/>
	                    <button type="submit" class="btn btn-primary btn-lg btn-block">
	                        Добавить заказ
	                    </button>
	                </div>
	            </div>

	        </div>
        </form>

	</div>

</template>

<script>
	export default {
		data: function() {
			return {
				requiredServiceName: '',
				takelaj: false,
				gruzchiki: false,
				auto: false,
				register: true,
				login: false,
				step0: true,
				step1: false,
				step2: false,
				step3: false,
				step4: false		
			}
		},
		methods: {

			selectTakelaj: function() {
				this.takelaj = true;
				this.requiredServiceName = "Takelajnie Raboty"; 
				this.step1 = true;
			},

			selectGruzchiki: function() {
				this.gruzchiki = true;
				this.requiredServiceName = "Gruzchiki"; 
				this.step1 = true;
			},

			selectAuto: function() {
				this.auto = true;
				this.requiredServiceName = "Auto Spectechnika"; 
				this.step1 = true;
			},						

			displayRegisterForm: function() {
				this.register = true;
				this.login = false;
			},

			displayLoginForm: function() {
				this.register = false;
				this.login = true;
			},

			displayStep2: function() {
				this.step1 = false;
				this.step2 = true;
				this.step3 = false;
				this.step4 = false;
			}
		}
	}
</script>