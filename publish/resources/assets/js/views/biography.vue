<template>
	<div>
		<div v-for="(model, index) in models" class="hero bio"  >

			<div class="columns">
				<div class="column is-4 has-text-centered">
					<img class="bio_img" v-bind:src="model.image">
				</div>
				<div class="column">
					<h3 class="title is-3 is-left">{{ model.client }}</h3>
					<h4 class="subtitle is-4 is-left">{{ model.since_until }}</h4>
					<h5 class="subtitle is-5 is-left">{{ model.job_title }}</h5>
				</div>
			</div>

		</div>
	</div>
</template>


<script>
	//import biographyDetail from '../components/biography-detail';

	export default {

		data(){
			return {
				models:	[],
			};
		},
		created(){
			axios.get('/api/biography').then( response => this.models = response.data );
		},
		mounted(){

		},
		methods:{

		},
		components:{
			//'biography-detail':biographyDetail,
		}
	};
</script>
