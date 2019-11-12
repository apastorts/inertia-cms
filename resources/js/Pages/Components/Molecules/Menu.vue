<template>
	<div>
		<div class="w-full bg-white shadow p-4 absolute z-20">
			<div class="container mx-auto flex justify-between">
				<div class="p-2">
					Momentum CMS
				</div>
				<div v-if="$page.user" class="p-2">
					<inertia-link href="/pages" class="p-2 text-orange-400 hover:text-orange-500 font-bold">Pages</inertia-link>
					<inertia-link href="/posts" class="p-2 text-orange-400 hover:text-orange-500 font-bold">Posts</inertia-link>
					<inertia-link href="/profile" class="ml-4 w-4 h-4 px-2 py-3 bg-orange-500 shadow rounded-full text-white font-bold"> {{ profile }} </inertia-link>
				</div>
			</div>
		</div>
		<div class="flex flex-col jusitfy-between">
			<slot></slot>
		</div>
	</div>
</template>
<script>
	export default{
		data(){
			return {
				profile: ''
			}
		},
		mounted(){
			this.profile = this.$page.user ? this.$page.user.name.match(/\b(\w)/g).join(' ') : ''
		}
	}
</script>