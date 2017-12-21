<template>
	<div class="container">
		<form-wizard 
    		color="#428bca"
           	title="Lessons Registration Form"
           	subtitle="To ensure consistency and help ensure your musical success, your weekly lesson is scheduled on the same day and time each week. Please let us know your preferences and we will do our best to find a teacher and time that will work for your schedule."
           	back-button-text="Go back!"
           	next-button-text="Go next!"
           	error-color="#e74c3c"
           	finish-button-text="Submit"
			@on-complete="onComplete">


		  	<tab-content 
		  		title="Request a lesson time" 
		  		:before-change="validateFirstStep">
		    	<form-cargo></form-cargo>
		  	</tab-content>


		  	<tab-content 
		  		title="Address and Date"
		  		:before-change="validateSecondStep">
		     	<form-add-address></form-add-address>
		   	</tab-content>

			
			<tab-content 
				title="Personal Information" 
				:before-change="validateThirdStep"
				v-if="!!this.$slots.first || !!this.$slots.second">
				<switcher>
					<div slot="first"><slot name="first"></slot></div>
					<div slot="second"><slot name="second"></slot></div>
				</switcher>	
			</tab-content>


			<tab-content title="Check and Submit">
				<h3>Check your details</h3>

		        <!-- List of all Added Lessons -->

		        <div v-for="(cargo, index) in this.$store.state.newOrder.cargos"  class="column">
                    {{ cargo.name }}
                    {{ cargo.weight }} {{ cargo.dimention }}, 
                    {{ cargo.length }} {{ cargo.size }}, {{ cargo.width }}, 
                    {{ cargo.height }}, {{ cargo.description }}
		        </div>

				City {{ this.$store.state.newOrder.city }} <br />
				Street: {{ this.$store.state.newOrder.street }} <br />
				Date: {{ this.$store.state.newOrder.date }} <br />
			</tab-content>
			

		    <div v-if="errorMsg" class="notification is-danger validation-error">
		      	{{errorMsg}}
		    </div>


	    	<template v-if="showCargoFormBtn == 1" slot="custom-buttons-right" slot-scope="props">
				<span v-if="props.activeTabIndex == 0">
			        <span class="button is-success" @click="showCargoForm">
			            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add new Lesson
			        </span>
				</span>
	    	</template>

		</form-wizard>

	</div>
</template>

<script>

	import {FormWizard, TabContent} from 'vue-form-wizard'
	import 'vue-form-wizard/dist/vue-form-wizard.min.css'


	export default {
		data() {
			return {
				errorMsg: null
			}
		},

		methods: {
			onComplete() {
				console.log("Lesson Registration Form Submitted");
				return true;
			},

			validateFirstStep() {
				if(this.$store.state.newOrder.cargos.length > 0) {
					this.errorMsg = null;
					return true;
				} 
				this.errorMsg = "You have to add at least one lesson";
				return false;
			},

			validateSecondStep() {
				if(!!this.$store.state.newOrder.city
				 	&& !!this.$store.state.newOrder.street 
				 	&& !!this.$store.state.newOrder.date) {

					this.errorMsg = null;
					return true;
				} 

				this.errorMsg = "Enter your full address and date";
				return false;
			},


			validateThirdStep() {

				if(this.$store.state.newOrder.registered) {

					if(!this.$store.state.newOrder.email || !this.$store.state.newOrder.pass) {

						this.errorMsg = "All fields are required";
						return false;
					}
				
				} else {

					if(!this.$store.state.newOrder.name || !this.$store.state.newOrder.email 
						|| !this.$store.state.newOrder.phone || !this.$store.state.newOrder.pass) {

						this.errorMsg = "All fields are required";
						return false;
					
					} else if(this.$store.state.newOrder.pass != this.$store.state.newOrder.repeatPass) {
						
						this.errorMsg = "Passwords don't match";
						return false;
					}
				}

				this.errorMsg = null;
				return true;
			},


			showCargoForm() {
                this.$store.state.isCargoFormShown = true;
            },

            onComplete(){
          		alert('Yay. Done!');
       		}
		},

		computed: {
			showCargoFormBtn() {
				return (this.$store.state.isCargoFormShown) ? 0 : 1;
			} 
		},

		created() {
			console.log("is cargo form shown " + this.$store.state.isCargoFormShown);
		},

		components: {
  			FormWizard,
  			TabContent
		}
	}
</script>	


<style>
	div.validation-error {
		margin-top: 20px;
	}

	div.wizard-card-footer {
		padding-top: 40px !important;
	}
</style>