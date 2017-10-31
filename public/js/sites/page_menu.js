new Vue	({
	el:'#content_menu',
	data : {
		foods:[],
		drinks:[],
		currentPage :0,
		itemsPerpage : 5,

	},
	mounted :function(){
		this.show_food();
		this.show_drink();
	},
	methods: {
		show_food :function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/foods',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'foods', response.data);
                console.log(this.foods);
            });
		},
		show_drink:function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/drinks',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'drinks', response.data);
                console.log(this.drinks);
            });
		}
	}
})