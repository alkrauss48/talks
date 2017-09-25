// Top `this` priority: the new keyword

function Bar() {
  console.log(this.foobar)
};

var foo = {
  foobar: 'foobar'
};

var ThisBar = function() {
  console.log(this.foobar)
}.bind(foo);

var bar     = new Bar();      // undefined
var thisBar = new ThisBar();  // undefined
