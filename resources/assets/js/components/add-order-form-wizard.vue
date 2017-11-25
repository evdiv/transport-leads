<template>
	<div class="container">
		<form-wizard>
			<tab-content title="Cargo">
			    My first tab content
			</tab-content>

			<tab-content title="Location and Time">
			      My second tab content
			</tab-content>

		   	<tab-content title="Contact information">
		     		Yuhuuu! This seems pretty damn simple
		   	</tab-content>
		</form-wizard>
	</div>
</template>

<script>
	import {FormWizard, TabContent} from 'vue-form-wizard'
	import 'vue-form-wizard/dist/vue-form-wizard.min.css'


	export default {
		components: {
  			FormWizard,
  			TabContent
		}
	}
</script>	