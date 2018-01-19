<template>

	<div class="box">

        <div class="columns">

			<div class="column">
	            <b-checkbox 
	            	size="is-medium" 
	            	native-value="demontaj"
	            	v-model = $store.state.newOrder.demontaj>First Type</b-checkbox>
	        </div>


			<div class="column">
	            <b-checkbox 
	            	size="is-medium"
	            	native-value="montaj"
	            	v-model = $store.state.newOrder.montaj>Second Type</b-checkbox>
	        </div>


			<div class="column">
	            <b-checkbox 
	            	size="is-medium"
	            	native-value="peremeshenie"
	            	v-model = $store.state.newOrder.peremeshenie>Third Type</b-checkbox>
	        </div>
 

			<div class="column">
	            <b-checkbox 
	            	size="is-medium"
	            	native-value="razbor"            	
	            	v-model = $store.state.newOrder.razbor>Forth Type</b-checkbox>
	        </div>

	    </div>

    </div>
</template>

