fetch("http://localhost/mi-restaurante/wp-json/wp/v2/posts")
  .then((d) => d.json())
  .then((d) => {
    console.log(d);
  });
