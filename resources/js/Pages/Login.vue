<template>
	<div>
		<div class="w-full bg-white shadow p-4 absolute z-20">
			<div class="container mx-auto flex jusitfy-between">
				<div class="p-2">
					Momentum CMS
				</div>
			</div>
		</div>
		<div class="pt-32">
			<div class="w-2/3 md:w-1/3 mx-auto bg-white shadow p-4">
				<div class="p-4 text-lg font-bold w-full text-center">
					Welcome Back
				</div>
				<div v-if="$page.error" class="text-red-500 font-bold p-4 text-lg w-full text-center">
					{{ $page.error }}
				</div>
				<form class="mx-auto p-2 flex flex-col justify-between" @submit.prevent="submit">
					<input type="text" v-model="form.email" placeholder="Email" class="w-full rounded shadow p-4 my-2">
					<input type="password" v-model="form.password" placeholder="Password" class="w-full rounded shadow p-4 my-2">
					<button class="my-2 w-full bg-orange-500 hover:bg-orange-600 text-white font-bold text-center p-4 shadow" >Log In</button>
				</form>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return {
				form: {
					email: '',
					password: ''
				}
			}
		},
		methods: {
			submit(){
				this.$inertia.post('/login', this.form)
			}
		}
	}
</script>