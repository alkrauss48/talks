class Demo {
  constructor() {
    this.list = [1, 2, 3];
  }

  printArray() {
    for (let i = 0; i < this.list.length; i++) {
      console.log(this.list[i]);
    }
  }
}

const object = new Demo();

object.printArray();
