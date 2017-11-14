<template>
	<div>
		<div class="panel panel-default">

	        <div class="panel-heading">Required Service </div>
	        <div class="panel-body">

			    <div class="form-group">
		            <div class="col-sm-4 col-sm-offset-2">
		                <div class="checkbox">
		                    <label><input type="checkbox" value="1" name="demontaj">Demontaj</label>
		                </div>

		                <div class="checkbox">
		                    <label><input type="checkbox" value="1" name="montaj">Montaj</label>
		                </div>
		            </div>

		            <div class="col-sm-4 col-sm-offset-2">
		                <div class="checkbox">
		                    <label><input type="checkbox" value="1" name="peremeshenie">Peremeshenie</label>
		                </div>

		                <div class="checkbox">
		                    <label><input type="checkbox" value="1" name="razbor">Razbor perekritiy</label>
		                </div>
		            </div>
		        </div>


		        <div class="form-group">
		            <div class="col-md-10 col-md-offset-1">
		                Order Description
		                <textarea name="note" 
		                class="form-control" rows="3"></textarea>
		            </div>    
		        </div>
	    	</div>
	    </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="btn btn-sm btn-default btn-block" @click="goToNextStep"> Next</div>   
            </div>
        </div>

	</div>

</template>


<script>
    export default {
        data: function () {
        	return {}
        },

        methods: {
            goToNextStep: function() {
                this.$emit("goToNextStep");
            }
        }
    }    
</script>
