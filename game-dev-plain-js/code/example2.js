// Default example 2

function bar() {
  console.log(this.foobar);
}

var foo = {
  foobar: 'foobar',
  bar: bar
}

bar()     // undefined
foo.bar() // 'foobar'
