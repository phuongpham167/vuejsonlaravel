<template>
	<div class="list-user">
		This is list user:

		<table class="tbl-list-user">
			<thead>
				<th>Name</th>
				<th>Location</th>
				<th>DOB</th>
			</thead>
			<tbody>
				<tr v-for="user in userData">
					<td><a @click="selectUser(user)" >{{ user.name.title }} - {{ user.name.last }}</a></td>
					<td>{{ user.location.city }}</td>
					<td>{{ user.dob }}</td>
				</tr>
			</tbody>			
		</table>
	</div>
	
</template>

<script>
	import data from './data.json'
	export default{
		data(){
			return {
				userData: data
			}
		},
		methods: {
			selectUser(user){
				this.$emit('userSelected', user)
			}
		}
	}
</script>

<style lang='scss' scoped>
	.tbl-list-user{
		width: 100%;
	}
</style>