<template>
	<menu class="w-full bg-gray-200 h-screen flex flex-col justify-between">
		<div class="w-full h-1/3"></div>
		<div class="w-full h-1/3 text-6xl text-center p-8">Home Page</div>
		<div class="w-full h-1/3"></div>
	</menu>
</template>

<script>
	import Menu from './Components/Molecules/Menu';

	export default{
		layout: Menu,
	}
</script>