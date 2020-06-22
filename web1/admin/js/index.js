	var vm = new Vue({
			el: "#root",
			data: {
				guanli: [{
						show: false,
						title: '管理单页',
						list: [{
								item: '新增单页',
								src: 'page_new.php'
							},
							{
								item: '单页列表',
								src: 'page_list.php'
							}
						]
					},
					{
						show: false,
						title: '分类管理',
						list: [{
								item: '新增分类',
								src: 'cate_new.php'
							},
							{
								item: '分类列表',
								src: 'cate_list.php'
							}
						]
					},
					{
						show: false,
						title: '新闻管理',
						list: [{
								item: '发布新闻',
								src: 'news_new.php'
							},
							{
								item: '新闻列表',
								src: 'news_list.php'
							}
							
						]
					},
					{
						show: false,
						title: '产品管理',
						list: [{
								item: '新增产品',
								src: 'product_new.php'
							},
							{
								item: '产品列表',
								src: 'product_list.php'
							}
						]
					},
					{
						show: false,
						title: '留言管理',
						list: [{
								item: '留言列表',
								src: 'guestbook_list.php'
							}

						]
					},
					{
						show: false,
						title: '友情连接管理',
						list: [{
								item: '新增链接管理',
								src: 'flink_new.php'
							},
							{
								item: '连接管理',
								src: 'flink_list.php'
							}
						]
					},
					{
						show: false,
						title: '管理员管理',
						list: [{
								item: '新增管理员',
								src: 'admin_new.php'
							},
							{
								item: '管理员列表',
								src: 'admin_list.php'
							}
						]
					},
				]
			},
			methods: {
				
			}
		})