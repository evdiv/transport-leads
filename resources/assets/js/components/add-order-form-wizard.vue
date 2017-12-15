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
		  		title="Personal Information"
		  		:before-change="validateSecondStep">
		     	<form-add-address></form-add-address>
		   	</tab-content>

			
			<tab-content title="Complete" v-if="!!this.$slots.first || !!this.$slots.second">
				<switcher>
					<div slot="first"><slot name="first"></slot></div>
					<div slot="second"><slot name="second"></slot></div>
				</switcher>	
			</tab-content>
			

    		<div v-if="errorMsg">
      			<span class="error">{{errorMsg}}</span>
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
				console.log("Lesson Registation First Step");
				return true;
			},

			validateSecondStep() {
				console.log("Lesson Registation Second Step");
				return true;
			},

			showCargoForm() {
                this.$store.state.isCargoFormShown = true;
            },

            onComplete: function(){
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
	span.error{
  		color:#e74c3c;
  		font-size:20px;
  		display:flex;
  		justify-content:center;
	}

	div.wizard-card-footer {
	padding-top: 40px !important;
	}
</style>