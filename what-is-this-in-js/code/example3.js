// Soft binding example

function bar() {
  console.log(this.foobar);
}

var foo = {
  foobar: 'foobar',
  bar: bar
}

bar()     // undefined
foo.bar() // 'foobar'

bar.call(foo);  // 'foobar'
bar.apply(foo); // 'foobar'
