let page = {

  add: function(e) {
    e.preventDefault();

    let data = new FormData();
    data.set('title', document.getElementById('page_title').value);
    data.set('content', tinymce.get('editor').getContent());


    axios({
      method: 'post',
      url: '/admin/page/add/',
      data,
      config: { headers: {'Content-Type': 'multipart/form-data' }}
    })
    .then(function (response) {
        console.log(response);
    })
    .catch(function (response) {
        console.log(response);
    });
  },

  update: function(e) {
    e.preventDefault();

    let data = new FormData();
    data.set('id', document.getElementById('page_id').value);
    data.set('title', document.getElementById('page_title').value);
    data.set('content', tinymce.get('editor').getContent());

    axios({
        method: 'post',
        url: '/admin/page/update/',
        data,
        config: { headers: {'Content-Type': 'multipart/form-data' }}
    })
      .then(function (response) {
          console.log(response);
      })
      .catch(function (response) {
          console.log(response);
      });
  }
};
