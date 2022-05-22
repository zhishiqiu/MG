laypage.render({
    elem: 'pager',
    count: res.data.total,
    limit: limit,
    groups: 5,
    layout: ["prev","page","next"],
    theme: '#13AF69',
    jump: function(obj, first) {
        param.page = obj.curr;
      //首次不执行
      if (!first) {
        http.request('pet_adoption.php', 'get', param, function(res) {
          vue.dataList = res.data.list
        })
      }
    }
  });