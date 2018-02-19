// Hard binding example

var foo = {
  foobar: 'foobar'
}

var bar = function() {
  console.log(this.foobar);
}.bind(foo);

bar(); // 'foobar'
