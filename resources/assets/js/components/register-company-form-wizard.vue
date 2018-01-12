<template>
	<div class="container">
		<form-wizard 
    		color="#428bca"
           	title="Company Registration Form"
           	subtitle="To ensure consistency and help ensure your musical success, your weekly lesson is scheduled on the same day and time each week. Please let us know your preferences and we will do our best to find a teacher and time that will work for your schedule."
           	back-button-text="Go back!"
           	next-button-text="Go next!"
           	error-color="#e74c3c"
           	finish-button-text="Register"
			@on-complete="onComplete"
			v-if=!this.orderPosted>


		  	<tab-content 
		  		title="Provided Services" 
		  		:before-change="validateFirstStep">

		  	</tab-content>

			
			<tab-content 
				title="Contact Information"
				:before-change="validateSecondStep">

			</tab-content>


			<tab-content title="Check and Submit">

				<article class="message">
				  <div class="message-header">
				    <p>Check your details</p>
				  </div>

				  <div class="message-body">

				  </div>
				</article>				
	
			</tab-content>
			

		    <div v-if="errorMsg" class="notification is-danger validation-error">
		      	{{errorMsg}}
		    </div>

		</form-wizard>


		<div class="columns is-mobile" v-if=this.orderPosted has-icon>
		  	<div class="column is-half is-offset-one-quarter">
		  		<div class="notification" >
					<div style="text-align:center;">
					 	Your order has been posted. In 2 sec you will be redirected to the orders page.
					</div>
				</div>
		  	</div>
		</div>
		
	</div>
</template>

<script>

	import {FormWizard, TabContent} from 'vue-form-wizard'
	import 'vue-form-wizard/dist/vue-form-wizard.min.css'

	export default {
		data() {
			return {
				errorMsg: null,
				orderPosted: false
			}
		},

		methods: {
			validateFirstStep() {
				return true;
			},

			validateSecondStep() {
				return true;
			},

            onComplete(){
				return true;
       		}
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