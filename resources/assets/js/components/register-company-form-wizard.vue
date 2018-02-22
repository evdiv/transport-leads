<template>
	<div class="container">

		<form-wizard 
    		color="#428bca"
           	title="Company Registration Form"
           	subtitle="After adding your company to our database you start receiving new orders and will be able to contact them and offer your service."
           	back-button-text="Go back!"
           	next-button-text="Go next!"
           	error-color="#e74c3c"
           	finish-button-text="Register"
			@on-complete="onComplete">


		  	<tab-content 
		  		title="Company Name and Provided Service" 
		  		:before-change="validateFirstStep">

				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Company Name</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
				                <div class="control">
                        			<input class="input" type="text" v-model=$store.state.newCarrier.name placeholder="Company Name">
				                </div>
				            </div>

				        </div>
				    </div>


				    <div class="field is-horizontal">
					  <div class="field-label is-normal">
					    	<label class="label">Description</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					      <div class="control">
					        <textarea class="textarea" v-model=$store.state.newCarrier.description placeholder="Add details about your service"></textarea>
					      </div>
					    </div>
					  </div>
					</div>




				    <div class="columns is-mobile">
  						<div class="column is-8">
  							<h3>Select Provided Lessons</h3>
  						</div>
					</div>

					<!-- Piano Lessons -->

				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Piano Lessons?</label>
				        </div>

				        <div class="field-body">
				            <div class="field">
						            <b-switch v-model="isTakelajProvided"
						                true-value="Yes"
						                false-value="No">
						                {{ isTakelajProvided }}
						            </b-switch>
				            </div>

				        </div>
				    </div>

				
					<div v-if="showSliderMaxCargo">
						<div class="columns">
							<div class="column is-9 is-offset-3">
								<vue-slider ref="slider" 
									v-model=$store.state.newCarrier.maxCargoWeight
									v-bind="cargoWeighOptions" ></vue-slider>		
								Maximum Cargo weight <b>{{ $store.state.newCarrier.maxCargoWeight }}</b> tonns.
							</div>
						</div>
				    </div>	

					<!--/ Piano Lessons -->



					<!-- Guitar Lessons -->

				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Guitar Lessons?</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
						            <b-switch v-model="isGruzchikiProvided"
						                true-value="Yes"
						                false-value="No">
						                {{ isGruzchikiProvided }}
						            </b-switch>
				            </div>

				        </div>
				    </div>


					<div v-if="showSliderMaxPeople">
						<div class="columns">
							<div class="column is-9 is-offset-3">
								<vue-slider ref="slider" 
									v-model=$store.state.newCarrier.maxPeople
									v-bind="maxPeopleOptions" ></vue-slider>		
								Number of people: <b>{{ $store.state.newCarrier.maxPeople }}</b>.
							</div>
						</div>
				    </div>	
					<!--/ Guitar Lessons -->


					<!-- Drum Lessons -->

				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Drum Lessons?</label>
				        </div>

				        <div class="field-body">

							<div class="field">
					            <b-switch v-model="isAutoProvided"
					                true-value="Yes"
					                false-value="No">
					                {{ isAutoProvided }}
					            </b-switch>
		        			</div>
				        </div>
				    </div>

				
					<div v-if="showSliderAvailableAutos">
						<div class="columns">
							<div class="column is-9 is-offset-3">

								<vue-slider ref="slider" 
									v-model=$store.state.newCarrier.maxAutokran
									v-bind="maxAutokranOptions" ></vue-slider>		
								Max Autokrans: <b>{{ $store.state.newCarrier.maxAutokran }}</b> tonns.
								<br/><br/><br/>

								<vue-slider ref="slider" 
									v-model=$store.state.newCarrier.maxManipulator
									v-bind="maxManipulatorOptions" ></vue-slider>		
								Max Manipulators: <b>{{ $store.state.newCarrier.maxManipulator }}</b> tonns.
								<br/><br/><br/>

								<vue-slider ref="slider" 
									v-model=$store.state.newCarrier.maxNizkoramnik
									v-bind="maxNizkoramnikOptions" ></vue-slider>		
								Max Nizkoramnik: <b>{{ $store.state.newCarrier.maxNizkoramnik }}</b> tonns.
								<br/><br/><br/>

								<vue-slider ref="slider" 
									v-model=$store.state.newCarrier.maxLifter
									v-bind="maxLifterOptions" ></vue-slider>		
								Max Lifter: <b>{{ $store.state.newCarrier.maxLifter }}</b> tonns.
								<br/><br/><br/>


								<vue-slider ref="slider" 
									v-model=$store.state.newCarrier.maxOpen
									v-bind="maxOpenOptions" ></vue-slider>		
								Max Open: <b>{{ $store.state.newCarrier.maxOpen }}</b> tonns.
								<br/><br/><br/>

							</div>
						</div>
				    </div>	

		  	</tab-content>


			
			<tab-content 
				title="Contact Information"
				:before-change="validateSecondStep">
	

				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">City</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
				                <div class="control">
                        			<input class="input" type="text" v-model=$store.state.newCarrier.city placeholder="City">
				                </div>
				            </div>

				        </div>
				    </div>


				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Address</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
				                <div class="control">
                        			<input class="input" type="text" v-model=$store.state.newCarrier.address placeholder="Address">
				                </div>
				            </div>

				        </div>
				    </div>


				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Email</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
				                <div class="control">
                        			<input class="input" type="text" v-model=$store.state.newCarrier.email placeholder="Email">
				                </div>
				            </div>

				        </div>
				    </div>				    


				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Phone</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
				                <div class="control">
                        			<input class="input" type="text" v-model=$store.state.newCarrier.phone placeholder="Phone">
				                </div>
				            </div>

				        </div>
				    </div>		

					<hr/>


				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Password</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
				                <div class="control">
                        			<input class="input" type="password" v-model=$store.state.newCarrier.password placeholder="Password">
				                </div>
				            </div>

				        </div>
				    </div>	


				    <div class="field is-horizontal">
				        <div class="field-label is-normal">
				            <label class="label">Password Confirmation</label>
				        </div>

				        <div class="field-body">

				            <div class="field">
				                <div class="control">
                        			<input class="input" type="password" v-model=$store.state.newCarrier.password_confirmation placeholder="Password Confirmation">
				                </div>
				            </div>

				        </div>
				    </div>				    

 			</tab-content>	


			<tab-content title="Check and Submit">



				<article class="message">
				  	<div class="message-header">
				    	<p>Check your details</p>
				  	</div>

				  	<div class="message-body">

						<h3>{{ this.$store.state.newCarrier.name }}</h3>
						{{ this.$store.state.newCarrier.description }}<br /><br />
						City: {{ this.$store.state.newCarrier.city }} <br />
						Address: {{ this.$store.state.newCarrier.address }} <br />
						Email: {{ this.$store.state.newCarrier.email }} <br />
						Phone: {{ this.$store.state.newCarrier.phone }} <br />						

						<h3>Provided services</h3>
							
						<div v-if=$store.state.newCarrier.maxCargoWeight>
							Max Weight: <b>{{$store.state.newCarrier.maxCargoWeight}}</b> tonn</div>

						<div v-if=$store.state.newCarrier.maxPeople>
							Number of People: <b>{{$store.state.newCarrier.maxPeople}}</b></div>

						<div v-if=$store.state.newCarrier.maxAutokran>
							Max Auto Krans: <b>{{$store.state.newCarrier.maxAutokran}}</b> tonn</div>

						<div v-if=$store.state.newCarrier.maxManipulator>
							Max Manipulator: <b>{{$store.state.newCarrier.maxManipulator}}</b> tonn</div>

						<div v-if=$store.state.newCarrier.maxNizkoramnik>
							Max Nizkoramnik: <b>{{$store.state.newCarrier.maxNizkoramnik}}</b> tonn</div>	

						<div v-if=$store.state.newCarrier.maxLifter>
							Max Lifter: <b>{{$store.state.newCarrier.maxLifter}}</b> tonn</div>		
							
						<div v-if=$store.state.newCarrier.maxOpen>
							Max Open: <b>{{$store.state.newCarrier.maxOpen}}</b> tonn</div>																												
				  	</div>

				</article>	
	
			</tab-content>
			

		    <div v-if="errorMsg" class="notification is-danger validation-error">
		      	{{errorMsg}}
		    </div>

		</form-wizard>

	</div>
</template>

<script>

	import vueSlider from 'vue-slider-component'
	import {FormWizard, TabContent} from 'vue-form-wizard'
	import 'vue-form-wizard/dist/vue-form-wizard.min.css'

	export default {
		data() {
			return {
				value: "0",
				cargoWeighOptions: {
					dotSize: 20,
					min: 0,
					max: 300,
					interval: 20,
					piecewise: true,
					piecewiseLabel: true
				},
				maxPeopleOptions: {
					dotSize: 20,
					min: 0,
					max: 50,
					interval: 5,
					piecewise: true,
					piecewiseLabel: true
				},
				maxAutokranOptions: {
					dotSize: 20,
					min: 0,
					max: 90,
					interval: 5,
					piecewise: true,
					piecewiseLabel: true
				},
				maxManipulatorOptions: {
					dotSize: 20,
					min: 0,
					max: 10,
					interval: 1,
					piecewise: true,
					piecewiseLabel: true
				},
				maxNizkoramnikOptions: {
					dotSize: 20,
					min: 0,
					max: 40,
					interval: 5,
					piecewise: true,
					piecewiseLabel: true
				}, 
				maxLifterOptions: {
					dotSize: 20,
					min: 0,
					max: 10,
					interval: 1,
					piecewise: true,
					piecewiseLabel: true
				},
				maxOpenOptions: {
					dotSize: 20,
					min: 0,
					max: 40,
					tooltip: "always",
					formatter: "{value} tonns",
					interval: 1
				},

				errorMsg: null,
				isTakelajProvided: 'No',
				isGruzchikiProvided: 'No',
				isAutoProvided: 'No',
				passwordConfirmation: '',
				carrierPosted: false
			}
		},

		computed: {
			showSliderMaxCargo() {
				return (this.isTakelajProvided == "Yes") ? true: false;
			},

			showSliderMaxPeople() {
				return (this.isGruzchikiProvided == "Yes") ? true: false;
			},

			showSliderAvailableAutos() {
				return (this.isAutoProvided == "Yes") ? true: false;
			},
		},

		methods: {
			validateFirstStep() {
				return true;
			},

			validateSecondStep() {
				return true;
			},

            onComplete(){
				
            	this.carrierPosted = this.$store.dispatch('postCarrier');
       		}
		},

		components: {
  			FormWizard,
  			TabContent,
  			vueSlider
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