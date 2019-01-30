<template>
	<div class="user-dashboard">
		<div class="list-user-comp">
			<h4>List user</h4>
			<ListUser @userSelected="childrenSelectUser"></ListUser> 
			<!-- de lang  nghe su kien tu component con su dung @tensukien = ham xu li o component cha-->
		</div>
		<div class="user-deatail-comp">
			<h4>User Deatail</h4>
			<UserDetail :userDetailInfo = "userSelectdFromChild"></UserDetail>	
			<!-- su dung prop de truyn du lieu cho component con UserDetail -->
		</div>
	</div>
</template>

<script>
	import ListUser from './ListUser.vue'
	import UserDetail from './UserDetail.vue'
	export default{
		components:{
			ListUser,
			UserDetail
		},
		data(){
			return{
				userSelectdFromChild:{}
			}
		},
		methods: {
			childrenSelectUser(user){
				console.log(user)
				this.userSelectdFromChild = user
			}
		}
	}
</script>

<style lang='scss' scoped>
	
</style>