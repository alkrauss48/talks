function do_the_thing(x) {
  var y = 0;
  for(var i = 0; i < x.length; i++) {
    if (typeof(x[i]) == 'number') {
      if (x[i] > 0) {
        y = y + x[i];
      }
    }
  }
  return y * 1.08;
}

console.log(do_the_thing([1.78, -100, 10.88, 5.23, 'a']))
