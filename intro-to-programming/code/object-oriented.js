class Demo {
  constructor() {
    this.list = [1, 2, 3]
  }

  printArray() {
    for (var i = 0; i < this.list.length; i++) {
      console.log(this.list[i]);
    }
  }
}

var object = new Demo();

object.printArray();
