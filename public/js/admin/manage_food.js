var manage_food = new Vue	({
	el:'#manage_food',
	data : {
		foods:[],
	},
	computed: {
	},
	mounted :function(){
		this.show_food();
	},
	methods: {
		show_food :function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/all_foods',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'foods', response.data);
                console.log(this.foods);
            });
		},
	}
})