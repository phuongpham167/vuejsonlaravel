<template>
    <div class="my-component">
    	Hello {{ message }}
    	<button @click="sayHello()">Click me</button> <!-- @click la su kien la cach viet tat cua v-on:click-->
    	<div>
    		{{ reverseMess }}
    	</div>
    	<div>
    		<div><button @click='changeType()'>Change type</button></div>
    		<div><button @click='changeText()'>Change text</button></div>
    		<ul>
    			<li v-for="food in foods" >{{ food.name }}</li>
    		</ul>
    		<ul>
    			<li v-for="(value, key, index) of mang" >{{ key }} - {{ value }} - {{  index }}</li>
    		</ul>
    	</div>
    </div>
</template>

<script>
    export default {
    	data(){
    		return{
    			message: "Pu",
    			mess2: "hị hị",
    			mess:  "phuong",
    			// mess-result: this.reverseMess,
    			mang: {
    				type: 'greet',
    				text: 'how r you?',
    			},
    			foods: [
    				{name: "hamberger"},
    				{name: "sandwitch"},
    				{name: "Chicken chop"},
    			]
    		}
    	},
    	methods: {
    		sayHello(){
    			// alert('Hello world')
    			this.message = 'Pu da click vao button' //tu khoa this de tham chieu den component hien tai
    			// return 'this function return value '
    		},
    		changeText(){
    			this.mang.text = "this is text"
    		},
    		changeType(){
    			this.mang.type = "this is type"
    		}
    	},
    	computed:{
    		reverseMess(){
    			return this.message.split('').reverse().join('')
    		},
    		getType(){
    			return this.mang.type
    		},
    		getText(){
    			return this.mang.text
    		}
    	},
    	watch: {
    		message(){
    			console.log('message changed')
    		},
    		reverseMess(){
    			console.log('computed message changed')
    		},
			getType(){
				console.log('type changed')
			},
			getText(){
				console.log('text changed')
			}
    		
    	},
    	mounted(){
            console.log('Component mounted.')
        }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color: red;
    }
</style>